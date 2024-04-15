<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="post">
        <div>
            <label for="name">User name</label>
            <input type="text" name="name" id="name">
            
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" name="login" value="login">
    </form>
    <script>
        
    </script>
</body>
</html>
<?php 
 if(isset($_POST["login"])){
    $username=$_POST["name"];
    $password=$_POST["password"];
    if(empty($username)){
        echo "please enter the username";
    }elseif(empty($password)){
        echo "please enter the pasword";
    } else{
        echo "Hello $username" . "<br>";
    
    foreach($_POST as $key=>$value){
        echo " {$key} = {$value} <br>";
        }
 }
 }
?>