<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Email">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>
<?php 

if(isset($_POST["btn"])){

    $email=$_POST["email"];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         echo "your email ius valid";
    }else{
        echo "your email is not valid";
    }
}


?>