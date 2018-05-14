<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/sall.php");
require_once($serverPath."/centreFormation/dbaction/salleDB.php");

$salle = new salle();
$etudiantdb = new salleDB();

$salle->numero=$_POST["numero"];
$salle->cour_sal = $_POST["cour"];
$salle->prof_sal=   $_POST["prof"];
$salle->dat=   $_POST["date"];
$salle->depart=   $_POST["depart"];
$salle->fin=          $_POST["fin"];





$r = $etudiantdb->updatesalle($salle);

if($r>0) header("Location: ../liste_salles.php");
else "erreur!";