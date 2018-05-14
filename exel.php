<?php
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=etudiant.csv");
$serverPath = $_SERVER['DOCUMENT_ROOT'];

require_once($serverPath."/centreFormation/database/database.php");
$cn = database::connect();


$sql =$cn->prepare('select ide_etu,nom_etu,pre_etu,tel_etu,mail_etu,vil_etu from etudiant'); 
 $sql->execute();
 $sql->setFetchMode(PDO::FETCH_OBJ);
 //print_r ($data);
 ?>"id";"ename";"prenom";"telephone";"email";"ville"<?php echo "\n";
 foreach($sql as $d){
	 
 echo '"'.$d->ide_etu.'";"'.$d->nom_etu.'";"'.$d->pre_etu.'";"'.$d->tel_etu.'";"'.$d->mail_etu.'";"'.$d->vil_etu.'"'."\n";
 
	 
 }?>