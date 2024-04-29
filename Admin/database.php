<?php
$serverName="localhost";
$username="root";
$password= "";
$database="admin";

$conn=mysqli_connect($serverName,$username,$password,$database);
mysqli_select_db($conn,'admin');


?>