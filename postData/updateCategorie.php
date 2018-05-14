<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/categorie.php");
require_once($serverPath."/centreFormation/dbaction/categorieDB.php");

$categorie = new categorie();
$categoriedb = new categorieDB();


$categorie->nom = $_POST["nom"];
$categorie->numero = $_POST["numero"];
$categorie->description = $_POST["description"];





$r = $categoriedb->updateCategorie($categorie);

if($r>0) header("Location: ../liste_categories.php");
else "erreur!";

