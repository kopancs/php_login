<?php

$server="localhost";
$user="esti_szoftverf";
$pwd="esti_szoftverf";
$dbName="esti_login";


$db=new mysqli($server, $user, $pwd, $dbName);
if($db-> connect_errno){
    die("Nem sikerült csatlakozni");
}echo "Sikeres csatlakozás";


if(!$db->set_charset("utf8")){
    echo "A karakterkódolást nem sikerült beállítani";
}