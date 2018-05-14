<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbaction/salleDB.php");

$salledb = new salleDB();

$id = $_POST["chek"];

$table_id = explode("/",$id);

for($i=0;$i<count($table_id);$i++) {

$salledb->deletesalle($table_id[$i]);

}

header("Location:..\liste_salles.php");