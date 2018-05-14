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
$formation->nom_cat=      $_POST["categorie"];
$formation->programme=      $_POST["programme"];





$r = $formationdb->addFormation($formation);

if($r>0) header("Location: ../nouveau_formation.php");
else "erreur!";

