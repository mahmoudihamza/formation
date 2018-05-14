<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/dbmodel/categorie.php");
require_once($serverPath."/centreFormation/dbaction/categorieDB.php");

$categorie = new categorie();
$categoriedb = new categorieDB();


$categorie->nom = $_POST["nom"];
$categorie->description = $_POST["description"];





$r = $categoriedb->addCategorie($categorie);

if($r>0) header("Location: ../nouveau_categorie.php");
else "erreur!";

