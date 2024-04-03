<?php 
session_start();

$_SESSION["name"]="sudhan". "<br>";

echo $_SESSION["name"];

$phone="apple";
echo $phone ."<br>";

$_SESSION["mobile"]=["oneplus","apple","vivo"]; // WE CAN ADD MORE DATA WITH SINGLE SESSION 

print_r($_SESSION);


?>