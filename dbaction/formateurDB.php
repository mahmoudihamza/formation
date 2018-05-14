<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");


class formateurDB {

public function getformateur() {

$cn = database::connect();

$query = $cn->prepare("select * from formateurs");

$query->execute();


$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function addformateurs($etudiant) {


$cn = database::connect();

$query = $cn->prepare("insert into formateurs values(NULL,?,?,?,?,?,?)");

$query->bindParam(1,$etudiant->nom);
$query->bindParam(2,$etudiant->prenom);
$query->bindParam(3,$etudiant->telephone);
$query->bindParam(4,$etudiant->email);
$query->bindParam(5,$etudiant->salaire);
$query->bindParam(6,$etudiant->specialite);

$insertedrow = $query->execute();

database::disconnect();

return $insertedrow;

}


public function deleteformateur($id) {



$cn = database::connect();

$query = $cn->prepare("delete from formateurs where ide_form=?");

$query->bindParam(1,$id);

$deleteddrow = $query->execute();

database::disconnect();

return $deleteddrow;

}


public function updateformateur($etudiant) {


$cn = database::connect();

$query = $cn->prepare("update formateurs set nom_form=?,pre_form =?,tel_form=?,ema_form=?,sal_form=?,spe_form=?  where ide_form=?");

$query->bindParam(1,$etudiant->nom);
$query->bindParam(2,$etudiant->prenom);
$query->bindParam(3,$etudiant->telephone);
$query->bindParam(4,$etudiant->email);
$query->bindParam(5,$etudiant->salaire);
$query->bindParam(6,$etudiant->specialite);
$query->bindParam(7,$etudiant->numero);


$updatedrow = $query->execute();

database::disconnect();

return $updatedrow;


}

public function getformateursPagination($numero,$value) {

if ($numero == null) $numero = 1;
 
$numero = ($numero - 1 ) * 5;

$cn = database::connect();

$query = $cn->prepare("select * from formateurs where Spe_form like '$value%'  limit 5 offset $numero ");
         
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}



// public function getformateursPagination($numero) {

// if ($numero == null) $numero = 1;
 
// $numero = ($numero - 1 ) * 5;

// $cn = database::connect();

// $query = $cn->prepare("select * from formateurs limit 5 offset $numero");
         
// $query->execute();

// $result = $query->fetchAll(PDO::FETCH_ASSOC);

// database::disconnect();

// return $result;

// }

public function getformateursCount() {

$cn = database::connect();

$query = $cn->prepare("select count(*) from formateurs");
             
$query->execute();

$result = $query->fetchColumn(0);

database::disconnect();

return $result;


}


}