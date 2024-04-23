<?php
$serverName="localhost";
$username="root";
$password= "";

$conn=mysqli_connect($serverName,$username,$password);

$sql="CREATE DATABASE IF NOT EXISTS user_Details";
$database=mysqli_query($conn,$sql);

mysqli_select_db($conn,'user_Details');
?>