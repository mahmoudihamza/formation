<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbaction/etudiantDB.php");

$etudiantdb = new etudiantDB();

$id = $_POST["id"];

$table_id = explode("/",$id);

for($i=0;$i<count($table_id);$i++) {

$etudiantdb->deleteEtudiant($table_id[$i]);

}

echo 1;