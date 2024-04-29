<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        
</head>
<body id="body">
    <div class ="reginput">
        <form action="signup.php" method="post" class="form-group">
            <h3>Sign up</h3>
            <div class="input">
                <label for="name">User name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input">
                <label for="mail">Email</label>
                <input type="text" name="mail" id="mail">
            </div>
            <p class="text-danger text-bold"><?php if(isset($_GET["message"])){
                echo $_GET["message"];} ?></p>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <p class="text-danger text-bold"><?php if(isset($_GET["message_pwd"])){
                echo $_GET["message_pwd"];} ?></p>
            <div>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>

            </div>
            <button type="submit" class ="btn btn-success">Signup</button>
          <a href="index.php" class="btn btn-danger"><b>Login Page </b></a>
        </form>
    </div>
</body>
</html>

<?php 
 include_once 'database.php';
 

// $serverName="localhost";
// $username="root";
// $password= "";

// $conn=mysqli_connect($serverName,$username,$password);

// $sql="CREATE DATABASE IF NOT EXISTS user_Details";
// $database=mysqli_query($conn,$sql);

// mysqli_select_db($conn,'user_Details');

$create="CREATE TABLE IF NOT EXISTS signup_information(id int auto_increment primary key,
                                         user_name varchar(30),
                                         email varchar(40),
                                         password varchar(20),
                                         gender varchar(10))";

$create_table=mysqli_query($conn,$create);                                         
// if($create_table){
//     echo 'table is created';
// }else{
//     echo "table is not created" . mysqli_error($conn);
// }
if(!empty($_POST["name"])  && !empty($_POST["mail"]) && !empty($_POST["password"]) && !empty($_POST["gender"])) {
$name=$_POST["name"];
$email=$_POST["mail"];
$password=$_POST["password"];
$gender = $_POST["gender"];
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    if (strlen($password)<10){
    $insert="INSERT INTO signup_information(user_name,email,password,gender) values('$name','$email','$password','$gender')";
    $insert_result=mysqli_query($conn,$insert);
if($insert_result){
    header("location:index.php?");
    }
}else{
    header('location:signup.php?message_pwd= password must me below 10 characters');
}

}else{
    header('location:signup.php?message= Email is not valid');
}
}





?>