<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbaction/categorieDB.php");

$categoriedb = new categorieDB();

$id = $_POST["id"];

$table_id = explode("/",$id);

for($i=0;$i<count($table_id);$i++) {

$categoriedb->deleteCategorie($table_id[$i]);

}

echo 1;