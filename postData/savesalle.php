<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/salle.php");
require_once($serverPath."/centreFormation/dbaction/formateurDB.php");

$etudiant = new salle();
$etudiantdb = new formateurDB();


$etudiant->num_sal = $_POST["num_sal"];
$etudiant->cour_sal=   $_POST["cour_sal"];
$etudiant->dat=   $_POST["date"];
$etudiant->depart=          $_POST["depart"];
$etudiant->fin=      $_POST["fin"];






$r = $etudiantdb->addformateurs($etudiant);

if($r>0) header("Location: ../nouveau_profs.php");
else "erreur!";
