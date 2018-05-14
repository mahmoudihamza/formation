<?php
require_once("config.php");

class database {

public static  $cn=null;

public static function connect() {

if ($cn == null)
$cn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD,array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_PERSISTENT => true
));

return $cn;

}


public static function disconnect() {

$cn = null;

}


}







