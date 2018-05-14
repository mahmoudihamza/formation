<?php

$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");


class salleDB {

public function getsalles($s) {

$cn = database::connect();

$query = $cn->prepare("select * from salle where num_sal=?");
$query->bindParam(1,$s);
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

database::disconnect();

return $result;

}

public function addSalle($salle) {


$cn = database::connect();

$query = $cn->prepare("insert into salle values(NULL,?,?,?,?,?,?)");

$query->bindParam(1,$salle->numero);
$query->bindParam(2,$salle->cour_sal);
$query->bindParam(3,$salle->prof_sal);
$query->bindParam(4,$salle->dat);
$query->bindParam(5,$salle->depart);
$query->bindParam(6,$salle->fin);


$insertedrow = $query->execute();

database::disconnect();

return $insertedrow;

}


public function deletesalle($id) {



$cn = database::connect();

$query = $cn->prepare("delete from salle where id_sal=?");

$query->bindParam(1,$id);

$deleteddrow = $query->execute();

database::disconnect();

return $deleteddrow;

}


public function updatesalle($salle) {


$cn = database::connect();

$query = $cn->prepare("update salle set ,cour_sal =?,prof_sal=?,dat_sal=?,dep_sal=? fin_sal=? where num_sal=?");

$query->bindParam(1,$salle->cour_sal);
$query->bindParam(2,$salle->prof_sal);
$query->bindParam(3,$salle->dat_sal);
$query->bindParam(4,$salle->depart);
$query->bindParam(5,$etudiant->fin);
$query->bindParam(5,$etudiant->numero);
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

public function getsalleCount() {

$cn = database::connect();

$query = $cn->prepare("select count(*) from salle");
             
$query->execute();

$result = $query->fetchColumn(0);

database::disconnect();

return $result;


}


}