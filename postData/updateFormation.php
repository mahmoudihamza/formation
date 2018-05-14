<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/formation.php");
require_once($serverPath."/centreFormation/dbaction/formationDB.php");

$formation = new formation();
$formationdb = new formationDB();


$formation->nom = $_POST["nom"];
$formation->description=   $_POST["description"];
$formation->date=   $_POST["date"];
$formation->prix=          $_POST["prix"];
$formation->image=      $_POST["image"];
$formation->programme=      $_POST["programme"];
$formation->numero=      $_POST["numero"];




$r = $formationdb->updateFormation($formation);

if($r>0) header("Location: ../liste_formations.php");
else "erreur!";

