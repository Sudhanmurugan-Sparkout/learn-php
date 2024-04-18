<?php 

include_once 'includes/db.inc.php';
include_once 'userDetails.html';

$sql="CREATE DATABASE IF NOT EXISTS user_information;";
$database=mysqli_query($conn,$sql);

mysqli_select_db($conn,'user_information');

$create="CREATE TABLE IF NOT EXISTS login_information(id int auto_increment primary key,
                                         first_name varchar(30),
                                         last_name varchar (30),
                                         email varchar(40),
                                         password varchar(10));";

$create_table=mysqli_query($conn,$create);                                         
if($create_table){
    echo 'table is created';
}else{
    echo "table is not created" . mysqli_error($conn);
}
if(!empty($_POST["name"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
$name=$_POST["name"];
$last=$_POST["last"];
$email=$_POST["email"];
$password=$_POST["password"];

$insert="INSERT INTO login_information(first_name,last_name,email,password) values('$name','$last','$email','$password')";
mysqli_query($conn,$insert);
}else{
    echo " Give the proper input";
}

$read= "select *from login_information";
$read_table=mysqli_query($conn,$read);

if(mysqli_num_rows($read_table)>0){
     
    while($result=mysqli_fetch_assoc($read_table)){
        echo "name : " . $result["first_name"];
    }
    }else{
        echo " no result set in this table";
    }


?>