<?php 

include_once 'includes/db.inc.php';

if ($conn==true) {
    echo "Connected successfully to the database<br>";
} else {
    echo "Failed to connect to the database<br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS logindb";     // if not exists is help to avoid error for re run the code
$database = mysqli_query($conn, $sql);

if ($database) {
    echo "Database created successfully<br>";
} else {
    echo "cannot create database : " . mysqli_error($conn) . "<br>";
    exit;
}

mysqli_select_db($conn, 'logindb');

$create = "CREATE TABLE IF NOT EXISTS user_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL)";
$createTable = mysqli_query($conn, $create);

if ($createTable==true) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

$insert="INSERT INTO user_details (user_name,password) values ('sudhan','qwe123')";  // did not give IF NOT EXIST keyword it insert one more time
$insertValue=mysqli_query($conn,$insert);

if ($insertValue==true){
    echo " the value is inserted";

}else{
    echo "the value is not inserted : " . mysqli_error($conn);
}

$insert1="INSERT INTO IF NOT EXISTS  user_details (user_name,password) values ('madhan','asd123')";
$insertValue1=mysqli_query($conn,$insert1);
?>
