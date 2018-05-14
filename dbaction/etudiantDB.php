<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");


class etudiantDB {

public function getEtudiants() {

$cn = database::connect();

$query = $cn->prepare("select * from etudiant");

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function addEtudiant($etudiant) {


$cn = database::connect();

$query = $cn->prepare("insert into etudiant values(NULL,?,?,?,?,?,?)");

$query->bindParam(1,$etudiant->nom);
$query->bindParam(2,$etudiant->prenom);
$query->bindParam(3,$etudiant->telephone);
$query->bindParam(4,$etudiant->email);
$query->bindParam(5,$etudiant->ville);
$query->bindParam(6,$etudiant->ide_for);


$insertedrow = $query->execute();

database::disconnect();

return $insertedrow;

}


public function deleteEtudiant($id) {



$cn = database::connect();

$query = $cn->prepare("delete from etudiant where ide_etu=?");

$query->bindParam(1,$id);

$deleteddrow = $query->execute();

database::disconnect();

return $deleteddrow;

}


public function updateEtudiant($etudiant) {


$cn = database::connect();

$query = $cn->prepare("update etudiant set nom_etu=?,pre_etu =?,tel_etu=?,mail_etu=?,vil_etu=? where ide_etu=?");

$query->bindParam(1,$etudiant->nom);
$query->bindParam(2,$etudiant->prenom);
$query->bindParam(3,$etudiant->telephone);
$query->bindParam(4,$etudiant->email);
$query->bindParam(5,$etudiant->ville);
$query->bindParam(6,$etudiant->numero);


$updatedrow = $query->execute();

database::disconnect();

return $updatedrow;


}

public function getEtudiantsPagination($numero,$value) {

if ($numero == null) $numero = 1;
 
$numero = ($numero - 1 ) * 5;

$cn = database::connect();

$query = $cn->prepare("select * from etudiant where nom_etu like '$value%'  limit 5 offset $numero ");
         
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

public function getEtudiantCount() {

$cn = database::connect();

$query = $cn->prepare("select count(*) from etudiant");
             
$query->execute();

$result = $query->fetchColumn(0);

database::disconnect();

return $result;


}


}