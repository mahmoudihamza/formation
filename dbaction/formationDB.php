<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");


class formationDB {

public function getFormations() {

$cn = database::connect();

$query = $cn->prepare("select * from formation");

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function addFormation($formation) {


$cn = database::connect();

$query = $cn->prepare("insert into formation values(NULL,?,?,?,?,?,?,?)");

$query->bindParam(1,$formation->nom);
$query->bindParam(2,$formation->description);
$query->bindParam(3,$formation->date);
$query->bindParam(4,$formation->prix);
$query->bindParam(5,$formation->image);
$query->bindParam(6,$formation->programme);
$query->bindParam(7,$formation->nom_cat);





$insertedrow = $query->execute();

database::disconnect();

return $insertedrow;

}


public function deleteFormation($id) {



$cn = database::connect();

$query = $cn->prepare("delete from formation where ide_for=?");

$query->bindParam(1,$id);

$deleteddrow = $query->execute();

database::disconnect();

return $deleteddrow;

}


public function updateFormation($formation) {


$cn = database::connect();

$query = $cn->prepare("UPDATE `formation` SET `nom_for` = ?, `des_for` = ?, `dat_for` = ?, `pri_for` = ?, `img_for` = ?,`pro_for` = ? WHERE `formation`.`ide_for` = ?;
");

$query->bindParam(1,$formation->nom);
$query->bindParam(2,$formation->description);
$query->bindParam(3,$formation->date);
$query->bindParam(4,$formation->prix);
$query->bindParam(5,$formation->image);
$query->bindParam(6,$formation->programme);
$query->bindParam(7,$formation->numero);



$updatedrow = $query->execute();

database::disconnect();

return $updatedrow;


}

public function getFormationsPagination($numero,$value) {

if ($numero == null) $numero = 1;
 
$numero = ($numero - 1 ) * 5;

$cn = database::connect();

$query = $cn->prepare("select * from formation where nom_for like '$value%'  limit 5 offset $numero ");
         
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

public function getFormationCount() {

$cn = database::connect();

$query = $cn->prepare("select count(*) from formation");
             
$query->execute();

$result = $query->fetchColumn(0);

database::disconnect();

return $result;


}


}