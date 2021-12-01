<?php
$host="localhost";
$db="kolokvijumi";
$user="root";
$pass="";

$conn = new mysqli($host,$user, $pass, $db);
//vraca broj greske vezane za gresku nad bazom
//ako postoji neki 
if($conn -> connect_errno){
    exit("Neuspesna konekicja: greska".$conn->connect_error." , err kod>".$conn->connect_errno);
}



?>