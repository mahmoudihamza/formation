<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/format.php");
require_once($serverPath."/centreFormation/dbaction/formateurDB.php");

$etudiant = new format();
$etudiantdb = new formateurDB();


$etudiant->nom = $_POST["nom"];
$etudiant->prenom=   $_POST["prenom"];
$etudiant->telephone=   $_POST["telephone"];
$etudiant->email=          $_POST["email"];
$etudiant->salaire=      $_POST["salaire"];
$etudiant->specialite=      $_POST["specialite"];
$etudiant->numero=      $_POST["numero"];




$r = $etudiantdb->updateformateur($etudiant);

if($r>0) header("Location: ../liste_profs.php");
else "erreur!";

