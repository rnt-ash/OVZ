<?php

return [
    "modelbase_rntforest_ovz_models_virtualservers" => "Virtual Servers",
    "modelbase_rntforest_ovz_models_physicalservers" => "Physical Servers",
    
    // Colocations
    "colocation_all_colocations" => "Alle Colocations",
    "colocations_invalid_level" => "ungültiger Level!",
    "colocations_choose_customer" => " wählen Sie einen Kunden aus.",
    "colocations_customer" => "Kunde",
    "colocations_name" => "Name",
    "colocations_colocationname" => "Mein Colocation Name",
    "colocations_description" => "Beschreibung",
    "colocations_description_info" => "Zusätzliche Informationen zu dieser Colocation",
    "colocations_location" => "Location",
    "colocations_location_info" => "Meine Colocation",
    "colocations_activ_date" => "Aktivierungsdatum",
    "colocations_name_required" => "Benötigt Namen",
    "colocations_namemax" => "Name ist zu lang",
    "colocations_namemin" => "Name ist zu kurz",
    "colocations_name_valid" => "Name muss alphanumeric sein und darf folgende Charakter beinhalten: \, -, _ and space.",
    "colocations_customer_required" => "Benötige Kunden",
    "colocations_customer_not_exist" => "Ausgewählter Kunde existiert nicht",
    "colocations_location_max" => "Location ist zu lang",
    "colocations_location_max" => "Location ist zu kurz",
    "colocations_locaton_valid" => "Location muss alphanumeric sein und darf folgende Charakter beinhalten: \, -, _ and space.",
    //View
    "colocations_title" => " Colocations",
    "colocations_view_physicalserver" => "Physikalische Server",
    "colocations_view_nophysicalserver" => "Keine physikalische Serve gefunden...",
    "colocations_view_ipobjects" => "IP Objekte",
    "colocations_view_newipobject" => "IP-Objekt hinzufügen",
    "colocations_view_noipobjects" => "Keine IP-Objekte gefunden...",
    "colocations_view_editipobject" => "IP-Objekt bearbeiten",
    "colocations_view_delmessage" => "Sind Sie sicher, dass Sie das Item löschen wollen ?",
    "colocations_view_delete" => "IP-Objekt löschen",
    "colocations_generalinfo" => "Allgemeine Informationen",
    "colocations_editovz" => "OVZ Einstellungen bearbeiten",
    "colocations_delcolocation" => "Colocation löschen",
    "colocations_view_customer" => "Kunde: ",
    "colocations_view_activdate" => "Aktivierungsdatum: ",
    "colocations_view_description" => "Beschreibnung: ",
    "colocations_title" => " Colocations",
    "colocations_save" => "Speichern",
    "colocations_cancel" => "Abbrechen",
    "colocations_genpdf" => "Generiere PDF zu IP Objekten",
    "colocations_ipobjects" => "IP Objekte",
    "colocations_pdf_no_ipobjects" => "Keine IP-Reservationen in der Colocation",
    "colocations_createpdf" => "PDF zur IP-Übersicht erstellen",
    "colocations_new_colocation" => "Neue Colocation erstellen",
    
    // IP Objects
    "ipobjects_address_is_now_main" => "IP Adresse %address% ist nun die Hauptadresse.",
    "ipobjects_item_not_found" => "Item wurde nicht gefunden!",
    "ipobjects_item_not_exist" => "Das Item existiert nicht!",
    "ipobjects_ip_success" => "IP Adresse wurde erfolgreich geändert",
    "ipobjects_ip_not_found" => "IP-Objekt wurde nicht gefunden !",
    "ipobjects_ip_conf_failed" => "Konfiguration der IP Adresse auf dem virtuellen Server fehlgeschlagen: ",
    "ipobjects_ip_delete_success" => "IP-Objekt wurde erfolgreich gelöscht",
    "ipobjects_ip_adress" => "IP-Objekt muss eine Adresse sein",
    "ipobjects_ip_assigned" => "IP-Objekt muss zugewiesen sein",
    "ipobjects_ip_update_failed" => "Aktualisieren des IP-Objektes fehlgeschlagen!",
    "ipobjects_ip" => "IP Adresse",
    "ipobjects_ip_addition" => "Zusätzlicher IP Wert",
    "ipobjects_ip_additioninfo" => "Leer | Subnetmaske wenn IP Address | End-IP-Address wenn Range | Prefix wenn Subnet",
    "ipobjects_allocated" => "Zugeteilt",
    "ipobjects_ismain" => "Ist Hauptadresse",
    "ipobjects_isnotmain" => "Ist nicht Hauptadresse",
    "ipobjects_ip_main" => "Haupt IP Adresse",
    "ipobjects_comment" => "Kommentar",
    "ipobjects_commentinfo" => "Zusätzliche Information zum IP Objekt",
    "ipobjects_dco_submit" => "Kein Datacenter Objekt übermittelt",
    "ipobjects_ip_not_valid" => "Keine gültige IP Adresse",
    "ipobjects_secont_value_valid" => "Kein gültiger zweiter Wert",
    "ipobjects_assigned_ip" => "Zugewiesene IPs können keine Range sein",
    "ipobjects_no_reservation" => "Keine passsende Reservation gefunden.",
    "ipobjects_ip_notpart_reservation" => "Diese IP ist nicht Teil einer Reservation.",
    "ipobjects_ip_already_exists" => "IP existiert bereits.",
    "ipobjects_ip_required" => "Benötige IP-Adresse",
    "ipobjects_ip_valid" => "Ungültige Zeichen in der IP Addresse.",
    "ipobjects_second-value_check" => "Ungültige Zeichen im zweiten Wert.",
    "ipobjects_main" => "Hauptadresse kann nur 0 oder 1 sein.",
    "ipobjects_allocated_value" => "Bitte wählen Sie einen korrekten zugewiesenen Wert",
    "ipobjects_comment_length" => "Kommentar ist zu lang (max. 50 Zeichen)",
    "ipobjects_unexpected_type" => "Unerwarteter Typ!",
    //View
    "ipobjects_edit_title" => "IP Objekte",
    "ipobjects_reservations" => "Reservationen",
    "ipobjects_edit_cancel" => "Abbrechen",
    "ipobjects_edit_save" => "Speichern",
      
    // Physical Servers
    "physicalserver_all_physicalservers" => "Alle Physical Server",
    "physicalserver_does_not_exist" => "Der Physical Server existiert nicht: ",
    "physicalserver_does_not_exist" => "Der Physical Server existiert nicht: ",
    "physicalserver_not_ovz_enabled" => "Server ist nicht OVZ aktiviert!",
    "physicalserver_job_failed" => "Ausführen des Jobs nicht erfolgreich: ",
    "physicalserver_update_failed" => "Update des Servers fehlgeschlagen: ",
    "physicalserver_update_success" => "Informationen erfolgreich gespeichert",
    "physicalserver_remove_server_first" => "Bitte löschen Sie zuerst den virtuellen Server !",
    "physicalserver_not_found" => "Physischen Server nicht gefunden !",
    "physicalserver_connection_prepare_title" => "Vorbereitende Schritte",
    "physicalserver_connection_prepare_instructions" => "Bevor die Verbindung mit dem Ubuntu-Server aufgebaut werden kann, müssen auf darauf folgende Befehle ausgeführt werden. Damit wird das System aktualisiert und es werden nötige Software-Pakete installiert.",
    "physicalserver_connection_success" => "Verbindung erfolgreich aufgebaut zu: ",
    "physicalserver_connection_restart" => "Es wird dringenst empfohlen den Ubuntu-Server neuzustarten nachdem die Verbindung aufgebaut wurde!",
    "physicalserver_connection_failed" => "Verbindung zum Ubuntu-Server fehlgeschlagen: ",
    "physicalserver_name" => "Name",
    "physicalserver_myserver" => "Mein Server",
    "physicalserver_fqdn" => "FQDN",
    "physicalserver_hostdomaintld" => "host.domain.tld",
    "physicalserver_choose_customer" => "Bitte wählen Sie einen Kunden aus.",
    "physicalserver_customer" => "Kunde",
    "physicalserver_choose_colocation" => "Bitte wählen Sie eine Colocation aus.",
    "physicalserver_colocation" => "Colocation",
    "physicalserver_cores" => "Kerne",
    "physicalserver_cores_available" => "Verfügbare Kerne  (z.B. 4)",
    "physicalserver_memory" => "Memory",
    "physicalserver_memory_available" => "Verfügbare Memory in MB (z.B. 2048)",
    "physicalserver_space" => "Speicher",
    "physicalserver_space_available" => "Verfügbarer Speicher in MB (z.B. 102400)",
    "physicalserver_activ_date" => "Aktivierungsdatum",
    "physicalserver_discription" => "Beschreibung",
    "physicalserver_discription_info" => "Zusätzliche Beschreibung zu diesem Server",
    "physicalserver_name_required" => "Name benötigt",
    "physicalserver_messagemax" => "Name ist zu lang",
    "physicalserver_messagemax" => "Name ist zu kurz",
    "physicalserver_name_valid" => "Name muss alphanumeric sein und darf folgende Charakter beinhalten: \, -, _ and space.",
    "physicalserver_fqdn_required" => "FQDN benötigt",
    "physicalserver_fqdn_valid" => "Muss ein String sein der mit Punkten getrennt ist",
    "physicalserver_customer_required" => "Benötige Kunde",
    "physicalserver_customer_not_exist" => "Ausgewählter Kunde existiert nicht",
    "physicalserver_colocation_required" => "Colocation wird benötigt",
    "physicalserver_colocation_not_exist" => "Bitte wählen Sie eine gültige Colocation aus",
    "physicalserver_core_required" => "Benötige Kern",
    "physicalserver_memory_required" => "Benötige Memory",
    "physicalserver_space_required" => "Benötige Speicherplatz",
    "physicalserver_username" => "Benutzername",
    "physicalserver_root" => "Administrator",
    "physicalserver_username_required" => "Benötige Benutzernamen",
    "physicalserver_password" => "Passwort",
    "physicalserver_password_required" => "Benötige Passwort",
    "physicalserver_permission" => "Nicht erlaubt für diesen Physical Server",
    "physicalserver_not_ovz_integrated" => "Der Physical Server ist nicht im OVZ integriert",
    "physicalserver_job_create_failed" => "Erstellen der Physical Servers fehlgeschlagen: ",
    "physicalserver_filter_all_customers" => "Alle Kunden",
    "physicalserver_filter_all_colocations" => "Alle Colocations",
    
    // View 
    "physicalserver_connect_title" => "Physical Servers LXD Connector",
    "physicalserver_connect_connectbutton" => "Verbinden",
    "physicalserver_title" => "Physikalische Server",
    "physicalserver_ip_notfound" => "Keine IP-Objekte gefunden...",
    "physicalserver_save" => "Speichern",
    "physicalserver_cancel" => "Abbrechen",
    "physicalserver_general_title" => "Allgemeine Informationen",
    "physicalserver_general_editsettings" => "Bearbeite Einstellungen",
    "physicalserver_general_update_infos" => "Aktualisiere OVZ Infos",
    "physicalserver_general_connectlxd" => "Verbinde LXD",
    "physicalserver_confirm_removeserver" => "Sind Sie sicher, dass Sie diesen Physical Server Ilöschen wollen?",
    "physicalserver_tooltip_removeserver" => "Diesen Server entfernen",
    "physicalserver_general_customer" => "Kunde:",
    "physicalserver_general_hosttype" => "Hosttyp:",
    "physicalserver_general_colocation" => "Colocation:",
    "physicalserver_general_activdate" => "Aktivierungsdatum:",
    "physicalserver_general_description" => "Beschreibung:",
    "physicalserver_general_fqdn" => "FQDN:",
    "physicalserver_hw_title" => "HW Spezifikation",
    "physicalserver_hw_cores" => "CPU-Kerne:",
    "physicalserver_hw_ram" => "Memory (RAM):",
    "physicalserver_hw_space" => "Speicher:",
    "physicalserver_ip_title" => "IP Objekte",
    "physicalserver_ip_addobject" => "Neues IP-Objekt hinzufügen",
    "physicalserver_ip_editobject" => "IP-Objekt bearbeiten",
    "physicalserver_ip_deleteconf" => "Sind Sie sicher, dass Sie das IP-Objekt löschen wollen ?",
    "physicalserver_ip_delete" => "IP-Objekt löschen",
    "physicalserver_ip_primary" => "zum Hauptobjekt festlegen",
    "physicalserver_slide_title" => "Physikalische Server",
    "physicalservers_new_physicalserver" => "Physikalischen Server hinzufügen",
            
    // Virtual Server
    "virtualserver_all_virtualservers" => "Alle Virtual Servers",
    "virtualserver_job_create_failed" => "Virtueller Server konnte nicht erstellt werden: ",
    "virtualserver_does_not_exist" => "Der virtuelle Server existiert nicht: ",
    "virtualserver_not_ovz_integrated" => "der virtuelle Server ist nicht im OVZ integriert",
    "virtualserver_job_failed" => "Ausführen des Jobs (ovz_modify_vs) fehlgeschlagen! Fehler: ",
    "virtualserver_update_failed" => "Aktualisieren des virtuellen Servers fehlgeschlagen: .",
    "virtualserver_invalid_level" => "Ungültiger Level!",
    "virtualserver_server_not_ovz_enabled" => "Server ist nicht im OVZ aktiviert",
    "virtualserver_job_infolist_failed" => "Ausführen des Jobs (ovz_all_info) fehlgeschlagen: ",
    "virtualserver_info_success" => "Informationen erfolgreich aktualisiert",
    "virtualserver_job_change_state" => "Status des Virtuellen Servers wurde erfolgreich geändert",
    "virtualserver_not_found" => "Virtueller Server wurde nicht gefunden.",
    "virtualserver_job_destroy_failed" => "Löschen/ Zerstören des virtuellen Servers fehlgeschlagen: ",
    "virtualserver_job_destroy" => "Virtueller Server wurde erfolgreich gelöscht",
    "virtualserver_job_ostemplates_failed" => "Ausführen des Jobs (ovz_get_ostemplates) fehlgeschlagen!",
    "virtualserver_job_listsnapshots_failed" => "Ausführen des Jobs (ovz_list_snapshots) fehlgeschlagen!",
    "virtualserver_snapshot_update" => "Snapshot Liste wurde erfolgreich aktualisiert",
    "virtualserver_job_switchsnapshotexec_failed" => "Ausführen des Jobs (ovz_switch_snapshot) fehlgeschlagen!",
    "virtualserver_job_switchsnapshot_failed" => "Wechseln des Snapshots auf den Server fehlgeschlagen: ",
    "virtualserver_job_createsnapshotexec_failed" => "Ausführen des Jobs (ovz_create_snapshot) fehlgeschlagen!",
    "virtualserver_job_createsnapshot_failed" => "Erstellen des Snapshots fehlgeschlagen: ",
    "virtualserver_job_deletesnapshotexec_failed" => "Ausführen des Jobs (ovz_delete_snapshot) fehlgeschlagen!",
    "virtualserver_job_createsnapshot_failed" => "Löschen des Snapshots fehlgeschlagen: ",
    "virtualserver_IP_not_valid" => "ist keine gültige IP-Adresse",
    "virtualserver_core_numeric" => "Core Anzahl ist nicht numerisch",
    "virtualserver_min_core" => "minimale Anzahl der Kerne ist 1",
    "virtualserver_max_core" => "Der virtuelle Server kann nicht mehr Kerne als der Host haben (Host Kerne: ",
    "virtualserver_ram_numeric" => "RAM ist nicht numerisch",
    "virtualserver_min_ram" => "Minimum RAM ist 512 MB",
    "virtualserver_max_ram" => "Der virtuelle Server kann nicht mehr RAM haben als der Host (Host Memory: ",
    "virtualserver_space_numeric" => "Speicher ist nicht numerisch",
    "virtualserver_min_space" => "Minimum Speicher ist 5 GB",
    "virtualserver_max_space" => "Der virtuelle Server kann nicht mehr Speicher als der Host haben (Host Speicher: ",
    "virtualserver_job_modifysnapshotexec_failed" => "Ausführen des Jobs (ovz_modify_vs) fehlgeschlagen: ",
    "virtualserver_job_modifyvs" => "Änderung am virtuellen Server erfolgreich",
    "virtualserver_name" => "Name",
    "virtualserver_myserver" => "Mein Server",
    "virtualserver_choose_customer" => "Bitte wählen Sie einen Kunden aus",
    "virtualserver_customer" => "Kunde",
    "virtualserver_choose_physicalserver" => "Bitte wählen Sie einen physischen Server aus",
    "virtualserver_physicalserver" => "Physical Server",
    "virtualserver_cores" => "Kerne",
    "virtualserver_cores_example" => "Verfügbare Kerne  (z.B. 4)",
    "virtualserver_memory" => "Memory",
    "virtualserver_memory_example" => "Verfügbare Memory in MB (z.B. 2048)",
    "virtualserver_space" => "Speicher",
    "virtualserver_space_example" => "Verfügbarer Speicher in MB (e.g. 102400)",
    "virtualserver_activdate" => "Aktivierungsdatum",
    "virtualserver_description" => "Beschreibung",
    "virtualserver_description_info" => "Zusätzliche Informationen zu diesem Server",
    "virtualserver_rootpassword" => "Administrator Passwort",
    "virtualserver_choose_ostemplate" => "Bitte wählen Sie zuerst einen Physical Server aus",
    "virtualserver_name_required" => "Benötige Namen",
    "virtualserver_namemax" => "Name ist zu lang (maximal 63 Zeichen)",
    "virtualserver_namemin" => "Name ist zu kurz (minimal 3 Zeichen)",
    "virtualserver_name_valid" => "Name darf nur aus Buchstaben, Zahlen und einem Bindestrich (-) bestehen. Zudem darf der Name nur mit einem Buchstaben beginnen.",
    "virtualserver_fqdn_valid" => "Muss ein String sein, durch Punkte getrennt",
    "virtualserver_customer_required" => "Benötige Kunden",
    "virtualserver_customer_not_exist" => "Ausgewählter Kunde existiert nicht",
    "virtualserver_physicalserver_required" => "Benötige physischen Server",
    "virtualserver_core_required" => "Es werden die Anzahl Cores als Zahl benötigt",
    "virtualserver_memory_required" => "Benötige Memory",
    "virtualserver_space_required" => "Benötige Speicher",
    "virtualserver_password_required" => "Benötige Passwort",
    "virtualserver_passwordmin" => "Passwort ist zu kurz. Minumum 8 Zeichen",
    "virtualserver_passwordmax" => "Password ist zu lang. Maximum 12 Zeichen",
    "virtualserver_passwordregex" => "Password darf nur Zahlen, Buchstaben und diese Zeichen beinhalten -_.",
    "virtualserver_ostemplate_required" => "Benötige OS Template",
    "virtualserver_hostname" => "Hostname",
    "virtualserver_hostname_valid" => "Muss ein String sein, durch Punkte getrennt",
    "virtualserver_memory_specify" => "Erlaubt sind nur Zahlen und ein Punkt. Zudem muss deklariert werden, ob es GB oder MB sind.",
    "virtualserver_discspace" => "Discspeicher",
    "virtualserver_discspace_example" => "Verfügbarer Speicher in GB  (e.g. 100)",
    "virtualserver_discspace_required" => "Benötige Diskspeicher",
    "virtualserver_discspace_specify" => "Erlaubt sind nur Zahlen und ein Punkt. Zudem muss deklariert werden, ob es TB, GB oder MB sind.",
    "virtualserver_dnsserver" => "DNS-Server",
    "virtualserver_startonboot" => "Start on boot",
    "virtualserver_startonboot_info" => "Start on boot kann 0 or 1 sein",
    "virtualserver_snapshotname" => "Snapshotname",
    "virtualserver_snapshotname_replica" => "Der Name darf replica nicht enthalten.",
    "virtualserver_snapshotname_required" => "Name muss numerisch sein und darf folgende Zechen enthalten -_().!? inklusive Leerschlag",
    "virtualserver_description_valid" => "Beschreibung darf nicht länder als 250 Zeichen sein",
    "virtualserver_modify_job_failed" => "Modifizieren des Virtuellen Servers fehlgeschlagen: ",
    "virtualserver_change_root_password" => "Root Passwort ändern",
    "virtualserver_root_password" => "Neues Passwort",
    "virtualserver_confirm_root_password" => "Passwort bestätigen",
    "virtualserver_password_confirm_match" => "Die Passwörter stimmen nicht überein",
    "virtualserver_change_root_password_successful" => "Das Root Passwort wurde erfolgreich geändert",
    "virtualserver_change_root_password_failed" => "Das Root Passwort konnte nicht geändert werden: ",
    "virtualserver_view_support_job_message" => "Sind Sie sicher, dass Sie den Support Job auf allen Virtual Server ausführen wollen?",
    "virtualserver_support_task_successful" => "Support Job erfolgreich ausgeführt",
    "virtualserver_ostemplate_not_valid" => "Das augewählte OS Template existiert auf diesem Phyiscal Server nicht",
    "virtualserver_no_ostemplates_found" => "Auf diesem Server sind keine OS Templates verfügbar",
    //View
    "virtualserver_title" => " Virtuelle Server",
    "virtualserver_view_new" => "Neu",
    "virtualserver_view_independentsys" => "Unabhängiges System",
    "virtualserver_view_container" => "Kontainer (CT)",
    "virtualserver_view_vm" => "Virtuelle Maschine (VM)",
    "virtualserver_view_vm_beta" => "(funktioniert nicht in der Beta!)",
    "virtualserver_snapshot" => "Snapshots",
    "virtualserver_save" => "Speichern",
    "virtualserver_cancel" => "Abbrechen",
    "virtualserver_snapshot_refresh" => "Snapshots aktualisieren",
    "virtualserver_snapshot_create" => "Neuen Snapshot erstellen",
    "virtualserver_snapshot_created" => "Snapshot wurde erfolgreich erstellt",
    "virtualserver_snapshot_run" => "Jetzt",
    "virtualserver_snapshot_switchinfo" => "Sind Sie sicher, dass Sie zu diesem Snapshot wechseln wollen ?",
    "virtualserver_snapshot_switch" => "Zu diesem Snapshot wechseln",
    "virtualserver_snapshot_switched" => "Erfolgreich zu Snapshot gewechselt",
    "virtualserver_snapshot_deleteinfo" => "Sind Sie sicher, dass Sie diesen Snapshot löschen wollen?",
    "virtualserver_snapshot_delete" => "Snapshot löschen",
    "virtualserver_snapshot_deleted" => "Snapshot wurde erfolgreich gelöscht",
    "virtualserver_snapshot_new" => "Neuen Snapshot erstellen",
    "virtualserver_ipobject" => "IP-Objekte",
    "virtualserver_ip_newobject" => "Neues IP-Objekt hinzufügen",
    "virtualserver_noipobject" => "Keine IP-Objekte gefunden...",
    "virtualserver_ip_edit" => "IP-Objekt bearbeiten",
    "virtualserver_ip_deleteinfo" => "Sind Sie sicher, dass Sie das IP-Objekt löschen wollen ?",
    "virtualserver_ip_delete" => "IP-Objekt löschen",
    "virtualserver_ip_primary" => "IP-Objekt als Hauptadresse setzen",
    "virtualserver_hwspec" => "HW Spezifikation",
    "virtualserver_hwspec_cpu" => "CPU-Kerne: ",
    "virtualserver_hwspec_memory" => "Memory (RAM): ",
    "virtualserver_hwspec_space" => "Speicher",
    "virtualserver_generalinfo" => "Allgemeine Information",
    "virtualserver_general_start" => "Start",
    "virtualserver_general_stop" => "Stop",
    "virtualserver_general_restart" => "Neustart",
    "virtualserver_general_editovz" => "OVZ Einstellungen bearbeiten",
    "virtualserver_general_updateovz" => "OVZ Informationen aktualisieren",
    "virtualserver_general_updatestats" => "OVZ Statistik aktialisieren",
    "virtualserver_general_setpwd" => "Neues Passwort setzen",
    "virtualserver_general_deleteinfo" => "Sind Sie sicher, dass Sie das Item löschen wollen ?",
    "virtualserver_general_delete" => "Virtuellen Server löschen",                  
    "virtualserver_general_customer" => "Kunde: ",
    "virtualserver_general_fqdn" => "FQDN: ",
    "virtualserver_general_uuid" => "OVZ UUID: ",
    "virtualserver_general_physicalserver" => "Physikalischer Server: ",
    "virtualserver_general_activdate" => "Aktivierungsdatum: ",
    "virtualserver_general_state" => "Status: ",
    "virtualserver_general_description" => "Beschreibung: ",
    "virtualserver_filter_all_customers" => "Alle Kunden",
    "virtualserver_filter_all_physical_servers" => "Alle physische Server",
    "virtualserver_no_physicalserver_found" => "Keinen Physikalischen Server gefunden, CTs können nicht erstellt werden",
    "virtualserver_save_replica_slave_failed" => "Speichern des Replika-Slaves fehlgeschlagen",
    "virtualserver_job_sync_replica_failed" => "Synchronisation der Replikas fehlgeschlagen",
    "virtualserver_update_replica_master_failed" => "Aktualisieren des Replika-Masters fehlgeschlagen",
    "virtualserver_replica_sync_run_in_background" => "Synchronisation der Replikationen läuft im Hintergrund",
    "virtualserver_isnot_replica_master" => "Der Virtuelle Server ist nicht Replika-Master",
    "virtualserver_replica_running_in_background" => "Replikation läuft im Hintergrund",
    "virtualserver_replica_master_not_stopped" => "Replika-Master ist nicht gestoppt",
    "virtualserver_replica_slave_not_stopped" => "Replika-Slave ist nicht gestoppt",
    'virtualserver_replica_failover_success' => "Replika Failover erfolgreich",
    "virtualserver_server_not_replica_master" => "Der Server ist nicht Replika-Master",
    "virtualserver_server_not_replica_slave" => "Der Server ist nicht Replika-Slave",
    "virtualserver_replica_master_update_failed" => "Aktualisieren des Replika-Masters fehlgeschlagen",
    "virtualserver_replica_slave_update_failed" => "Aktualisieren des Replika-Slaves fehlgeschlagen",
    "virtualserver_replica_switched_off" => "Replika wurde ausgeschaltet",
    "virtualserver_replica" => "Replikation",
    "virtualserver_replica_tooltip_activate" => "Replikation hinzufügen",
    "virtualserver_replica_confirm_run" => "Soll die Replika wirklich gestartet werden?",
    "virtualserver_replica_tooltip_run" => "Replikation ausführen",
    "virtualserver_replica_confirm_failover" => "Soll der Failover wirklich ausgeführt werden?",
    "virtualserver_replica_tooltip_failover" => "Failover",
    "virtualserver_replica_confirm_delete" => "Soll die Replika zu diesem Server wirklich entfernt werden?",
    "virtualserver_replica_tooltip_delete" => "Löschen",
    "virtualserver_replica_not_activated" => "Replikation ist nicht aktiviert",
    "virtualserver_replica_status" => "Status: ",
    "virtualserver_replica_slave" => "Slave Name: ",
    "virtualserver_replica_uuid" => "Slave UUID: ",
    "virtualserver_replica_host" => "Host: ",
    "virtualserver_replica_lastrun" => "Letzte Laufzeit: ",
    "virtualserver_replica_nextrun" => "Nächste Laufzeit: ",
    "virtualserver_replica_running_in_background" => "Replikation gestartet und läuft im Hintergrund.",
    "virtualserver_cancel" => "Abbrechen",
    "virtualserver_replica_" => "Replikation starten",
    "virtualservers_show_pdf" => "PDF generieren",
    "virtualservers_datasheet" => "Datenblatt Virtual Server",
    "virtualservers_servrname" => "Servername: ",
    "virtualservers_general_info" => "Allgemeine Information",
    "virtualservers_activ_date" => "Einschaltdatum: ",
    "virtualservers_fqdn" => "FQDN: ",
    "virtualservers_server_type" => "Server-Type: ",
    "virtualservers_pricepermonth" => "Preis pro Monat (exkl. MwSt): ",
    "virtualservers_system_specification" => "Systemspezifikation",
    "virtualservers_system" => "System: ",
    "virtualservers_os_system" => "Betriebssystem: ",
    "virtualservers_cores" => "Kerne: ",
    "virtualservers_memory" => "Arbeitsspeicher: ",
    "virtualservers_discspace" => "Festplattenspeicher: ",
    "virtualservers_description" => "Beschreibung: ",
    "virtualservers_ip_adress" => "IP Adressen",
    "virtualservers_comment" => "Kommentar",
    // Replica stats PDF
    "virtualserver_replicapdf_placeholder" => "Replika Statistiken anhand Datum",
    "virtualservers_replicapdf" => "Replika Statistiken",
    "virtualserver_replicapdf_no_replicas_found" => "Keine Replikas für dieses Datum gefunden",
    "virtualserver_replicapdf_no_permission" => "Keine Berechtigung",
    "virtualserver_replicapdf_master" => "Master",
    "virtualserver_replicapdf_slave" => "Slave",
    "virtualserver_replicapdf_start" => "Startzeit",
    "virtualserver_replicapdf_end" => "Endzeit",
    "virtualserver_replicapdf_duration" => "Dauer",
    "virtualserver_replicapdf_files" => "Anzahl Files",
    "virtualserver_replicapdf_bytes" => "Übertragene Bytes",
    "virtualserver_replicapdf_no_replica" => "Replika konnte nicht korrekt ausgeführt werden!",
    "virtualserver_replicapdf_no_stats" => "Keine Statistiken zu diesem Server vorhanden",

    // Monitoring
    "monitoring_mon_behavior_not_implements_interface" => "MonBehavior implementiert nicht das MonBehaviorInterface.",
    "monitoring_mon_server_not_implements_interface" => "MonServer implementiert nicht das MonServerInterface.",
    "monitoring_parent_cannot_execute_jobs" => "Auf dem Parent-Object ist es nicht möglich Jobs auszuführen.",
    "monitoring_healjob_failed" => "Ausführung des Healjobs fehlgeschlagen.",
    "monitoring_healjob_not_executed_error" => "Automatischer Healjob konnte nicht unverzüglich gesendet werden. Kann passieren, wenn der Host nicht erreichbar ist. Wird vom HealingSystem deaktiviert, damit er nicht später versehentlich unnötig ausgeführt wird.",
    "monitoring_healing_executed" => "Heilungsmassnahmen wurden ausgeführt.",
    "monitoring_monuptimesgenerator_computefailed" => "Berechnen der Uptime fehlgeschlagen: ",
    "monitoring_monlocaldailylogsgenerator_computefailed" => "Berechnen des Durchschnitts fehlgeschlagen: ",
    "monitoring_monlocaldailylogsgenerator_delete_old_daily_log" => "Das alte Daily Log wurde gelöscht: ",
    "monitoring_mon_behavior_could_not_instantiate_valuestatus" => "Es konnte kein ValueStatus Objekt instanziert werden (evt. fehlen die Infos im Statistics Array)",
    "monitoring_allinfoupdater_mark_failed" => "Der Job wurde als fehlerhaft markiert weil er nicht unverzüglich vom Monitoring gesendet werden konnte.",
    "monitoring_allinfoupdater_key_missing" => "Der benötigte Key existiert nicht im Retval des ovz_all_info Jobs.",
    // MonJobs
    "monitoring_monjobs_add_no_valid_behavior" => "Ausgewähltes Behavior existiert nicht",
    "monitoring_monjobs_montype_remote_expected" => "Diese Methode funktioniert nur für mon_type 'remote'.",
    "monitoring_monjobs_montype_local_expected" => "Diese Methode funktioniert nur für mon_type 'local'.",
    "monitoring_monjobs_title" => "MonJobs",
    "monitoring_monjobs_nok_title" => "MonJob(s) nicht optimal",
    "monitoring_monjobs_add" => "MonJob hinzufügen",
    "monitoring_monjobs_behavior" => "Monitoring behavior",
    "monitoring_monjobs_add_successful" => "MonJob wurde erfolgreich hinzugefügt",
    "monitoring_monjobs_add_failed" => "MonJob konnte nicht hinzugefügt werden: ",
    "monitoring_monjobs_save_successful" => "MonJob wurde ergolgreich gespeichert",
    "monitoring_monjobs_save_failed" => "MonJob konnte nicht gespeichert werden: ",
    "monitoring_monjobs_no_uptime" => "Keine Uptime verfügbar",
    "monitoring_monjobs_edit" => "MonJob bearbeiten",
    "monitoring_monjobs_diagram" => "Diagramm anzeigen",
    "monitoring_monjobs_details" => "Details anzeigen",
    "monitoring_monjobs_mute" => "MonJob stumm schalten",
    "monitoring_monjobs_unmute" => "Benachrichtigungen aktivieren",
    "monitoring_monjobs_muteconf" => "Wollen Sie diesen MonJob wirklich stumm schalten?",
    "monitoring_monjobs_unmuteconf" => "Wollen Sie die Benachrichtigungen für diesen MonJob wieder einschalten?",
    "monitoring_monjobs_delete" => "MonJob löschen",
    "monitoring_monjobs_deleteconf" => "Wollen Sie diesen MonJob wirklich löschen?",
    "monitoring_monjobs_login_not_from_customer" => "Ausgewähltes Login entspricht nicht dem Kunden des eingeloggten Users",
    "monitoring_monjobs_mute_successful" => "MonJob wurde erfolgreich stumm geschaltet",
    "monitoring_monjobs_mute_failed" => "MonJob konnte nicht stumm geschaltet werden: ",
    "monitoring_monjobs_unmute_successful" => "Benachrichtigungen wurden erfoglreich wieder eingeschaltet",
    "monitoring_monjobs_unmute_failed" => "Benachrichtigungen wurden erfolgreich wieder eingeschaltet",
    "monitoring_monjobs_delete_sucessful" => "MonJob wurde erfolgreich gelöscht",
    "monitoring_monjobs_delete_failed" => "MonJob konnte nicht gelöscht werden: ",
    "monitoring_monjobs_login_not_exist" => "Das ausgewählte Login als Kontakt existiert nicht",
    "monitoring_monjobs_save" => "Speichern",
    "monitoring_monjobs_cancel" => "Abbrechen",
    "monitoring_monjobs_back" => "Zurück",
    // Validate
    "monitoring_monjobs_server_id_required" => "Server ID wird benötigt",
    "monitoring_monjobs_server_id_numeric" => "Server ID darf nur eine Zahl sein",
    "monitoring_monjobs_server_class_required" => "Server Klasse wird benötigt",
    "monitoring_monjobs_mon_type_local_valid" => "Local MonJob darf als MonType nur local enthalten",
    "monitoring_monjobs_mon_type_remote_valid" => "Remote MonJob darf als MonType nur remote enthalten",
    "monitoring_monjobs_main_ip_valid" => "Main IP ist keine gültige IP-Adresse",
    "monitoring_monjobs_mon_behavior_class_required" => "Behavior Klasse wird benötigt",
    "monitoring_monjobs_mon_behavior_params_required" => "Behavior Parameter werden benötigt",
    "monitoring_monjobs_period_required" => "Periode wird benötigt",
    "monitoring_monjobs_period_numeric" => "Periode darf nur eine Zahl sein",
    "monitoring_monjobs_status_local_valid" => "Der Status bei einem Local MonJob darf nur normal, warning, maximal oder nostate sein",
    "monitoring_monjobs_status_remote_valid" => "Der Status bei einem Remote MonJob darf nur up, down oder nostate sein",
    "monitoring_monjobs_last_status_change_required" => "Datum der letzten Status Änderung wird benötigt",
    "monitoring_monjobs_last_status_change_format" => "Datum der letzten Änderung muss im Format Y-m-d sein",
    "monitoring_monjobs_warning_value_required" => "Warnungs Wert wird benötigt",
    "monitoring_monjobs_warning_value_numeric" => "Warnungs Wert muss eine Zahl sein",
    "monitoring_monjobs_maximal_value_required" => "Maximal Wert wird benötigt",
    "monitoring_monjobs_maximal_value_numeric" => "Maximal Wert muss eine Zahl sein",
    "monitoring_monjobs_active_required" => "Aktiv Feld wird benötigt",
    "monitoring_monjobs_active_valid" => "Aktiv kann entweder auf 1 oder 0 gesetzt sein",
    "monitoring_monjobs_healing_required" => "Healing Feld wird benötigt",
    "monitoring_monjobs_healing_local_valid" => "Healing kann bei einem Local MonJob nur 0 sein",
    "monitoring_monjobs_healing_remote_valid" => "Healing kann bei einem Remote MonJob nur entweder 0 oder 1 sein",
    "monitoring_monjobs_alarm_required" => "Alarm wird benötigt",
    "monitoring_monjobs_alarm_valid" => "Alarm kann entweder auf 1 oder 0 gesetzt sein",
    "monitoring_monjobs_alarmed_required" => "Alarmiert wird benötigt",
    "monitoring_monjobs_alarmed_valid" => "Alarmiert kann entweder auf 1 oder 0 gesetzt sein",
    "monitoring_monjobs_muted_required" => "Muted wird benötigt",
    "monitoring_monjobs_muted_valid" => "Muted kann entweder auf 1 oder 0 gesetzt sein",
    "monitoring_monjobs_last_alarm_required" => "Datum des letzten Alarms wird benötigt",
    "monitoring_monjobs_last_alarm_format" => "Datum des letzten Alarms muss im Format Y-m-d sein",
    "monitoring_monjobs_alarm_period_required" => "Alarm Periode wird benötigt",
    "monitoring_monjobs_alarm_period_numeric" => "Alarm Periode darf nur eine Zahl sein",
    "monitoring_monjobs_mon_contacts_message_required" => "Benachrichtigungs-Kontakte werden benötigt",
    "monitoring_monjobs_mon_contacts_message_valid" => "Benachrichtigungs-Kontakte dürfen nur als Zahlen mit einem Komma separiert gespeichert werden",
    "monitoring_monjobs_mon_contacts_alarm_required" => "Alarmierungs-Kontakte werden benötigt",
    "monitoring_monjobs_mon_contacts_alarm_valid" => "Alarmierungs-Kontakte dürfen nur als Zahlen mit einem Komma separiert gespeichert werden",
    "monitoring_monjobs_last_run_required" => "Datum der letzten Ausführung wird benötigt",
    "monitoring_monjobs_last_run_format" => "Datum der letzten Ausführung muss im Format Y-m-d sein",
    "monitoring_monjobs_modified_required" => "Datum der letzten Änderung wird benötigt",
    "monitoring_monjobs_modified_format" => "Datum der letzten Änderung muss im Format Y-m-d sein",
    // Form
    "monitoring_monjobs_on_server" => "auf Server",
    "monitoring_monjobs_mon_behavior_params" => "Behavior Parameter",
    "monitoring_monjobs_period" => "Intervall (Pause zwischen Ausführung)",
    "monitoring_monjobs_alarm_period" => "Alarm Intervall",
    "monitoring_monjobs_warning_value" => "Warnungs Wert",
    "monitoring_monjobs_maximal_value" => "Maximal Wert",
    "monitoring_monjobs_active" => "Aktiv",
    "monitoring_monjobs_alarm" => "Alarm",
    "monitoring_monjobs_healing" => "Healing",
    "monitoring_monjobs_message_contacts" => "Benachrichtigungs-Kontakte",
    "monitoring_monjobs_alarm_contacts" => "Alarmierungs-Kontakte",
    // MonJob details
    "monitoring_monjobs_details_id" => "MonJob ID",
    "monitoring_monjobs_details_last_run" => "Letzte Ausführung",
    "monitoring_monjobs_details_status" => "Status",
    "monitoring_monjobs_details_since" => "seit",
    "monitoring_monjobs_details_actperiodup" => "Uptime (aktueller und letzter Monat)",
    "monitoring_monjobs_details_actyearup" => "Uptime (aktuelles Jahr)",
    "monitoring_monjobs_details_everup" => "Uptime (immer)",
    "monitoring_monjobs_no_upime" => "Keine Uptime verfügbar",
    "monitoring_monjobs_details_active" => "Monitoring Aktiv",
    "monitoring_monjobs_details_healing" => "Heilung Aktiv",
    "monitoring_monjobs_details_alarm" => "Alarmierung Aktiv",
    "monitoring_monjobs_details_alarmed" => "Aktuell im Alarmzustand",
    "monitoring_monjobs_details_last_alarm" => "Letzte Alarmmeldung",
    "monitoring_monjobs_details_contacts_messsage" => "Benachrichtigungs-Kontakte",
    "monitoring_monjobs_details_alarm_messsage" => "Alarmierungs-Kontakte",
    // Downtimes
    "monitoring_monjobs_downtimes_healjob" => "HealJob",
    "monitoring_monjobs_downtimes_no_healjob" => "Kein HealJob vorhanden",
    "monitoring_monjobs_downtimes_type" => "Job Typ",
    "monitoring_monjobs_downtimes_from" => "Von",
    "monitoring_monjobs_downtimes_to" => "Bis",
    "monitoring_monjobs_downtimes_duration" => "Dauer",
    "monitoring_monjobs_downtimes_seconds" => "Sekunden",
    "monitoring_monjobs_downtimes_id" => "ID",
    "monitoring_monjobs_downtimes_created" => "Erstellt",
    "monitoring_monjobs_downtimes_params" => "Parameter",
    "monitoring_monjobs_downtimes_sent" => "Gesendet",
    "monitoring_monjobs_downtimes_executed" => "Ausgeführt",
    "monitoring_monjobs_downtimes_done" => "Status",
    "monitoring_monjobs_downtimes_error" => "Fehler",
    "monitoring_monjobs_downtimes_warning" => "Warnung",
    "monitoring_monjobs_downtimes_retval" => "Rückgabe Wert",
    // MonLocalJobs        
    "monitoring_monlocaljobs_no_valid_unit" => "Das angegebene Einheit-Argument ist nicht erlaub.",
    "monitoring_monlocaljobs_end_before_start" => "Das angegebene End-Datum darf nicht vor dem Start-Datum sein.",
    "monitoring_monlocaljobs_title" => "Local MonJobs",
    "monitoring_monlocaljobs_notfound" => "Keine Local MonJobs gefunden...",
    "monitoring_monlocaljobs_statistics_timestamp_to_old" => "Statistiken sind zu alt. Der Job wird nicht geloggt bzw. ausgeführt in diesem Durchgang. Beim nächsten Start über Crontab wird er wieder gestartet.",
    // MonRemoteJobs
    "monitoring_monremotejobs_title" => "Remote MonJobs",
    "monitoring_monremotejobs_notfound" => "Keine Remote MonJobs gefunden...",
];
