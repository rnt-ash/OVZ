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

namespace RNTForest\jobsystem\ovz\jobs;

/**
* @jobname ovz_list_vs
* get a JSON of all VS on this Physical Server
* 
* @jobparam UUID
* @jobreturn JSON Array with infos
*/

class OvzListVsJob extends AbstractOvzJob {

    public static function usage(){
        return [
            "type" => "ovz_list_vs",
            "description" => "get a JSON of all VirtualServers on the hostserver",
            "params" => [],
            "params_example" => '',
            "retval" => 'JSON array with objects what \'prlctl list -ajo uuid,name,type,status\' command would give, e.g. [ { "uuid": "05772175-19bb-4736-a178-9d0c9e821f7b", "name": "test", "type": "CT", "status": "running" }, ...] ',
            "warning" => "nothing specified",
            "error" => "different causes ( getting list failed)",
        ];
    }
    
    public function run() {
        $this->Context->getLogger()->debug("Get data!");
        
        $exitstatus = $this->PrlctlCommands->listVs();
        if($exitstatus > 0) return $this->commandFailed("Getting list failed",$exitstatus);
        
        $json = $this->PrlctlCommands->getJson();
        if(!empty($json)){
            $this->Done = 1;    
            $this->Retval = $json;
            $this->Context->getLogger()->debug("Get Data Success.");
            
        }else{
            $this->Done = 2;
            $this->Error = "Convert info to JSON failed!";
            $this->Context->getLogger()->debug($this->Error);
        }
    }
}
