<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");


class categorieDB {

public function getCategories() {

$cn = database::connect();

$query = $cn->prepare("select * from categorie");

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function getFormationCategories($nom) {

$cn = database::connect();

$query = $cn->prepare("SELECT ide_for,nom_for,dat_for,pri_for FROM `formation`WHERE nom_cat='$nom'");
//$query->bindParam(1,$categorie->nom);
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function addCategorie($categorie) {


$cn = database::connect();

$query = $cn->prepare("insert into categorie values(NULL,?,?)");

$query->bindParam(1,$categorie->nom);
$query->bindParam(2,$categorie->description);




$insertedrow = $query->execute();

database::disconnect();

return $insertedrow;

}


public function deleteCategorie($id) {



$cn = database::connect();

$query = $cn->prepare("delete from categorie where ide_cat=?");

$query->bindParam(1,$id);

$deleteddrow = $query->execute();

database::disconnect();

return $deleteddrow;

}


public function updateCategorie($categorie) {


$cn = database::connect();

$query = $cn->prepare("update categorie set nom_cat=?,des_cat=? where ide_cat=?");

$query->bindParam(1,$categorie->nom);
$query->bindParam(2,$categorie->description);


$query->bindParam(3,$categorie->numero);


$updatedrow = $query->execute();

database::disconnect();

return $updatedrow;


}

public function getCategoriesPagination($numero,$value) {

if ($numero == null) $numero = 1;
 
$numero = ($numero - 1 ) * 5;

$cn = database::connect();

$query = $cn->prepare("select * from categorie where nom_cat like '$value%'  limit 5 offset $numero ");
         
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}



// public function getEtudiantsPagination($numero) {

// if ($numero == null) $numero = 1;
 
// $numero = ($numero - 1 ) * 5;

// $cn = database::connect();

// $query = $cn->prepare("select * from etudiant limit 5 offset $numero");
         
// $query->execute();

// $result = $query->fetchAll(PDO::FETCH_ASSOC);

// database::disconnect();

// return $result;

// }

public function getCategorieCount() {

$cn = database::connect();

$query = $cn->prepare("select count(*) from categorie");
             
$query->execute();

$result = $query->fetchColumn(0);

database::disconnect();

return $result;


}


}