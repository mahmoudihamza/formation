<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbaction/formateurDB.php");

$formateurdb = new formateurDB();

$id = $_POST["id"];

$table_id = explode("/",$id);

for($i=0;$i<count($table_id);$i++) {

$formateurdb->deleteformateur($table_id[$i]);

}

echo 1;