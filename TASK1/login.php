<?php 

include_once 'signup.php';


if(isset($_POST["submit_login"])){

$email=$_POST["email"];
$login_password=$_POST["login_password"];

$sql="select*from signup_information where user_name=$email and password=$login_password";
$check=mysqli_query($conn,$sql);

if(mysqli_num_rows($check)==1){

    header("location : signup.html");
    exit();

}else{
    header("location:index.html?message=Username and email is not valid ");
    exit();
}




}




?>