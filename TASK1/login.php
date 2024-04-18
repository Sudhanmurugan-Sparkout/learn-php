<?php 

include_once 'signup.php';
include_once 'signup.html';

if(isset($_POST["submit"])){

$mail=$_POST["mail"];
$password=$_POST["password"];

$sql="select*from signup_information where user_name=$mail and password=$password";
$check=mysqli_query($conn,$sql);




}




?>