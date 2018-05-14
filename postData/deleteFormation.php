<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbaction/formationDB.php");

$formationdb = new formationDB();

$id = $_POST["id"];

$table_id = explode("/",$id);

for($i=0;$i<count($table_id);$i++) {

$formationdb->deleteFormation($table_id[$i]);

}

echo 1;