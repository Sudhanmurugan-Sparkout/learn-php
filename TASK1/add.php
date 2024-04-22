<?php 
// include_once "crud.php";

$serverName="localhost";
$username="root";
$password= "";

$conn=mysqli_connect($serverName,$username,$password);

$sql="CREATE DATABASE IF NOT EXISTS user_Details";
$database=mysqli_query($conn,$sql);

mysqli_select_db($conn,'user_Details');
if(isset($_POST["add_submit"])){
$add_id=$_POST["add_id"];
$add_name=$_POST["add_name"];
$add_lname=$_POST["add_lname"];
$add_age=$_POST["add_age"];
$add_colour=$_POST["add_colour"];
 
 if(empty($add_name)){
     header('location:crud.php?message=please need to fill the all input');
    
}else{

    $insert_query="INSERT INTO  user_information (user_name,last_name,age,favourite_colour,id) values ('$add_name','$add_lname','$add_age','$add_colour','$add_id')";
    $insert_result=mysqli_query($conn,$insert_query);

    if(!$insert_result){
        echo"err: " . mysqli_error($conn);
    }else{
        header("location:crud.php?insert_message=the value inserted sucessfully");
    }
}

}

?> 