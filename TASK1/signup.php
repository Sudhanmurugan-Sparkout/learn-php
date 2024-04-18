<?php 
 
 include_once 'signup.html'

$serverName="localhost";
$username="root";
$password= "";

$conn=mysqli_connect($serverName,$username,$password);

$sql="CREATE DATABASE IF NOT EXISTS user_Details;";
$database=mysqli_query($conn,$sql);

mysqli_select_db($conn,'user_Details');

$create="CREATE TABLE IF NOT EXISTS signup_information(id int auto_increment primary key,
                                         user_name varchar(30) primary key,
                                         email varchar(40),
                                         password varchar(10)
                                         gender varchar(10));";

$create_table=mysqli_query($conn,$create);                                         
if($create_table){
    echo 'table is created';
}else{
    echo "table is not created" . mysqli_error($conn);
}
if(!empty($_POST["name"])  && !empty($_POST["mail"]) && !empty($_POST["password"]) && !empty($_POST["gender"])) {
$name=$_POST["name"];
$email=$_POST["mail"];
$password=$_POST["password"];
$gender = $_POST["gender"];
}
$insert="INSERT INTO signup_information(first_name,email,password,gender) values('$name','$email','$password','$gender')";
mysqli_query($conn,$insert);




?>