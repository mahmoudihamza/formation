<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/etudiant.php");
require_once($serverPath."/centreFormation/dbaction/etudiantDB.php");

$etudiant = new etudiant();
$etudiantdb = new etudiantDB();


$etudiant->nom = $_POST["nom"];
$etudiant->prenom=   $_POST["prenom"];
$etudiant->telephone=   $_POST["telephone"];
$etudiant->email=          $_POST["email"];
$etudiant->ville=      $_POST["ville"];
$etudiant->ide_for=      $_POST["formation"];





$r = $etudiantdb->addEtudiant($etudiant);

if($r>0) header("Location: ../nouveau_etudiant.php");
else "erreur!";

