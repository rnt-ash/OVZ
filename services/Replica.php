<?php
/**
* @copyright Copyright (c) ARONET GmbH (https://aronet.swiss)
* @license AGPL-3.0
*
* This code is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License, version 3,
* along with this program.  If not, see <http://www.gnu.org/licenses/>
*
*/

namespace RNTForest\ovz\services;

use Phalcon\DiInterface;   

use RNTForest\ovz\models\VirtualServers;   


class Replica extends \Phalcon\DI\Injectable
{
    /**
    * @var FactoryDefault
    */
    private $di;

    public function __construct(DiInterface $di){
        $this->di = $di;
    }

    protected function translate($token,$params=array()){
        return $this->getDI()->getShared('translate')->_($token,$params);
    }

    /**
    * dummy method only for auto completion purpose
    * 
    * @return \RNTForest\core\services\Push
    */
    protected function getPushService(){
        return $this->di['push'];
    }

    /**
    * starts a replica sync (background job)
    * 
    * @param \RNTForest\ovz\models\VirtualServers $replicaMasterID
    * @return \RNTForest\core\models\Jobs $job
    * @throws Exceptions
    */
    public function run($replicaMaster){

        // sync already runs ?
        if($replicaMaster->getOvzReplicaStatus() == 2)
            throw new \Exception("replica_sync_already running");

        // execute ovz_list_snapshots job 
        // no pending needed because job is readonly       
        $push = $this->getPushService();
        $params = array('UUID'=>$replicaMaster->getOvzUuid());
        $job = $push->executeJob($replicaMaster->PhysicalServers,'ovz_list_snapshots',$params);
        $message = $this->translate("virtualserver_job_listsnapshots_failed");
        if(!$job || $job->getDone()==2) throw new \Exception($message);

        // save snapshots
        $snapshots = $job->getRetval();
        $replicaMaster->setOvzSnapshots($snapshots);
        if ($replicaMaster->save() === false) {
            $message = $this->translate("virtualserver_update_failed");
            throw new \Exception($message.$replicaMaster->getName());
        }

        if(count(json_decode($snapshots)) >= 120)
            throw new \Exception("replica_max_snapshots_reached");

        // calculate next run (cron should not be empty!)
        // ToDo: composer "poliander/cron": "dev-master"
        $nextTimestamp = PHP_INT_MAX;
        $nextRun = "";
        if(!empty($replicaMaster->getOvzReplicaCron())){
            $acron = explode("\n",$replicaMaster->getOvzReplicaCron());
            foreach($acron as $cronline){
                $cronline = trim($cronline);
                $cron = new Cron($cronline,new DateTimeZone('Europe/Zurich'));
                if(!$cron->isValid()) throw new \Exception("replica_cron_ivalid");
                // calc next possible run
                if ($cron->getNext() < $nextTimestamp) $nextTimestamp = $cron->getNext();
            }
            $nextRun = date('Y-m-d H:i:s',$nextTimestamp);
        }

        // save next possible run
        $replicaMaster->setOvzReplicaNextrun($nextRun);
        if ($replicaMaster->save() === false) {
            $message = $this->translate("virtualserver_update_failed");
            throw new \Exception($message.$replicaMaster->getName());
        }

        // change status
        if($replicaMaster->getOvzReplicaStatus() != 3){
            $replicaMaster->setOvzReplicaStatus(2);
            if ($replicaMaster->save() === false) {
                $message = $this->translate("virtualserver_update_failed");
                throw new \Exception($message.$replicaMaster->getName());
            }
        }

        // initial Sync
        $params = array(
            "UUID"=>$replicaMaster->getOvzUuid(),
            "SLAVEHOSTFQDN"=>$replicaMaster->ovzReplicaHost->getFqdn(),
            "SLAVEUUID"=>$replicaMaster->ovzReplicaId->getOvzUuid(),
        );

        // pending with severity 1 so that in error state further jobs can be executed but the entity is marked with a errormessage     
        // callback to update virtualserver_replica_lastrun
        $pending = array(
            'model' => '\RNTForest\ovz\models\VirtualServers',
            'id' => $replicaMaster->getId(),
            'element' => replica,
            'severity' => 1,
            'params' => array(),
            'callback' => '\RNTForest\ovz\functions\Pending::updateAfterReplicaRun'
        );
        $job = $push->executeJob($replicaMaster->physicalServers,'ovz_sync_replica',$params,$pending);
        if($job->getDone() == 2){
            $message = $this->translate("virtualservers_job_sync_replica_failed");
            throw new \Exception($message.$job->getError());
        }

        return $job;
    }







/**************************** old, todo **********************************/

    private function reconnectMySQL(){
        // Datenbank schliessen..
        $this->MySQL->close();

        // ..und gleich wieder öffnen!            
        if(!$this->MySQL = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_DBASE)) 
            file_put_contents("EATDebug.log","Verbindung zu MySQL konnte nicht aufgebaut werden...\n",FILE_APPEND);
        $this->MySQL->set_charset("utf8");
    }            


    /**
    * Sucht alle Server auf einen OVZ-Host und kontrolliert, ob Replica aktiviert ist.
    * 
    */
    public function checkForUnactivatedReplicas(){
        // Alle virtuellen Server abholen (idle und error)
        $sql = "SELECT id,name,ovz_replica,ovz_replica_status FROM `servers` ".
        "WHERE dco_parent in (SELECT id FROM servers WHERE ovz=1 AND dco_parent=1)";
        if (!$res=$this->MySQL->query($sql)) 
            throw new Exception("Probleme beim Abholen der Server: ".$this->MySQL->error);

        $message = "";
        while ($row = $res->fetch_assoc()){
            if(in_array($row['id'],$this->excludeFromReplica)) continue;
            if($row['ovz_replica']==0) 
                $message .=  "Server ".$row['name']."(ID".$row['id']."): Replika ist nicht aktiviert.\n";
            if($row['ovz_replica']==1 && $row['ovz_replica_status']==0) 
                $message .=  "Server ".$row['name']."(".$row['id']."): Replika ist aktiviert, Status aber auf 0 (off).\n";
        }
        if(!empty($message)){
            $message = "Folgende Server wurden gefunden, bei welchen die Replika-Sync nicht aktiviert wurde.\n\n".$message;
            mail("info@aronet.ch","Inkonsistenzen bei Replikas",$message);
        }
    }

    /**
    * Führt einen Sync aller aktiven Replikas aus. Ungeachtet ob diese fällig sind
    * Die Syncs werden nacheinader ausgeführt, somit kann das Script recht lange laufen!
    * 
    */
    public function dailyReplicaSync(){
        try{
            // Alle Replikas abholen (idle und error)
            $sql = "SELECT id,ovz_replica_host FROM servers WHERE ovz_replica=1 AND (ovz_replica_status = 1 OR ovz_replica_status = 9)";
            if (!$res=$this->MySQL->query($sql)) 
                throw new Exception("Probleme beim Abholen der aktiven Replikas: ".$this->MySQL->error);

            // ToDo: ev. mehrer Sync paralell laufen lassen.

            // Replikas anstossen...
            while ($row = $res->fetch_assoc()){
                if($jobID = $this->replicaStart($row['id'])){
                    // Warten bis Job abgearbeitet ist
                    while(!$this->isJobFinished($jobID))sleep(10);
                } else {
                    // Ist etwas schiefgegangen, nicht abbrechen sondern mit dem Nächsten weiter machen.
                    $this->genLog('alarm','error','3000',$this->error,'1');
                }
            }
        } catch(Exception $e){
            // Logeintrag erstellen
            if(!$this->MySQL->ping()) $this->reconnectMySQL();
            $logtext = "Es wurde eine Fehlermeldung generiert: ".$this->MySQL->real_escape_string(htmlentities($this->makePrettyException($e)));
            $this->genLog('alarm','error','3000',$logtext,'1');
        }
        return true;
    }


    /**
    * Kontrolliert ob ein Sync fällig ist und für Ihn entsprechend aus
    * 
    */
    public function checkForNextSync(){
        try{
            // Alle fälligen Replikas abholen
            $sql = "SELECT id FROM servers WHERE ovz_replica=1 AND ovz_replica_status > 0 AND ovz_replica_nextrun != '0000-00-00 00:00:00' AND ovz_replica_nextrun <= now()";
            if (!$res=$this->MySQL->query($sql)) 
                throw new Exception("Problem beim abholen der fälligen Replikas: ".$this->MySQL->error);

            // Fällige Replikas anstossen...
            while ($row = $res->fetch_assoc()){
                if(!$this->replicaStart($row['id']))
                // Ist etwas schiefgegangen, nicht abbrechen sondern mit dem nächsten weiter machen.
                $this->genLog('alarm','error','3000',$this->error,'1');
            }
        } catch(Exception $e){
            // Logeintrag erstellen
            $logtext = "Es wurde eine Fehlermeldung generiert: ".$this->MySQL->real_escape_string(htmlentities($this->makePrettyException($e)));
            $this->genLog('alarm','error','3000',$logtext,'1');
        }
        return true;
    }



    public function cleanUpReplicaSnapshots(){
        try{
            // letztes mögliches Datum berechenen
            $lastDate = new DateTime(NULL,new DateTimeZone('Europe/Zurich'));
            $lastDate->sub(new DateInterval('P'.REPLICA_SNAPSHOTS_KEEP_DAYS.'D'));

            // Alle Replikaservers durchgehen
            $sql="SELECT ovz_replica_id, ovz_replica_host FROM servers WHERE ovz_replica=1";
            if(!$res = $this->MySQL->query($sql)) 
                throw new Exception("Abfragen der ReplicaCTID fehlgeschlagen:".$this->MySQL->error);
            while($row = $res->fetch_assoc()){
                // Snapshots vom Replikaserver abholen
                $params = array('CTID' => $row['ovz_replica_id']);
                if(!$this->EATPush->executeJob($row['ovz_replica_host'],'ovz_get_snapshots',$params)){
                    // Bei Problemen mit einem Replika beim nächsten weiter machen
                    $logtext = "Abholen der Snaphots vom Server fehlgeschlagen.".$this->EATPush->getError();
                    $this->genLog('alarm','error','3000',$logtext,'1');
                    continue;
                }
                $aSnapshots = (array) $this->EATPush->getRetval();
                foreach($aSnapshots as $snapshot){
                    $snapshotdate = new datetime($snapshot['DATE'],new DateTimeZone('Europe/Zurich'));
                    if($snapshotdate < $lastDate){
                        // Snapshot entfernen
                        $params = array(
                            'CTID' => $row['ovz_replica_id'],
                            'UUID' => $snapshot['UUID']
                        );
                        if(!$this->EATPush->executeJob($row['ovz_replica_host'],'ovz_delete_snapshot',$params)){
                            // Bei Problemen mit einem Replika beim nächsten weiter machen
                            $logtext = "Senden des Löschauftrag zu Snapshot ".$snapshot['UUID']." zu Replika ID".$row['ovz_replica_id']." fehlgeschlagen: ".$this->EATPush->getError();
                            $this->genLog('alarm','error','3000',$logtext,'1');
                            continue;
                        } else {
                            // Warten bis Job abgearbeitet ist
                            $jobID = $this->EATPush->getLastID();
                            while(!$this->isJobFinished($jobID))sleep(10);

                            $logtext = "Löschauftrag zu Snapshot ".$snapshot['UUID']." zu Replika ID".$row['ovz_replica_id']." wurde gesendet.";
                            $this->genLog('info','ok','3000',$logtext,'1');
                        }
                    }
                }
            }
        } catch(Exception $e){
            // Logeintrag erstellen
            $logtext = "Probleme beim Clean Up der Replika Snapshots: ".$this->MySQL->real_escape_string(htmlentities($this->makePrettyException($e)));
            $this->genLog('alarm','error','3000',$logtext,'1');
        }
        return true;
    }


    public function getStats(){
        try{
            // Alle Replika Master auflisten        
            $sql = "SELECT id,name,ovz_replica_id,ovz_replica_cron,ovz_replica_lastrun,ovz_replica_nextrun,ovz_replica_status ".
            "FROM servers WHERE ovz_replica = 1";
            $res = $this->MySQL->query($sql);
            if(!$res) throw new Exception("Replika Master können nicht abgeholt werden ".$this->MySQL->error);
            while($row = $res->fetch_assoc()){
                echo "Server: ".$row['name']." [".$row['id']."]\n";
                $jobs = $this->getSyncJobsFromMaster($row['id']);
                foreach($jobs as $job){
                    echo "Status: ".$job['done']." Error: ".$job['error']."\n";
                }
            }

        }catch(Exception $e){
            echo "Auflisten der Statistiken nicht möglich: ".$e->getMessage();    
        }
    }

    private function getSyncJobsFromMaster($masterID){
        $jobs = array();

        // Alle Jobs zu diesem Master abholen
        $sql = "SELECT * FROM jobs WHERE type ='ovz_sync_replica'";
        $res = $this->MySQL->query($sql);
        if(!$res) throw new Exception("Jobs können nicht abgeholt werden ".$this->MySQL->error);
        while($row = $res->fetch_assoc()){
            $params = json_decode($row['params'],true);
            if($params['CTID'] == $masterID){
                $jobs[$row['id']]['params'] = $params;
                $jobs[$row['id']]['created'] = $row['created'];
                $jobs[$row['id']]['sent'] = $row['sent'];
                $jobs[$row['id']]['done'] = $row['done'];
                $jobs[$row['id']]['error'] = $row['error'];
                $jobs[$row['id']]['retval'] = json_decode($row['retval'],true);
            }
        }
        return $jobs;
    }



/**************************** old **********************************/

}
