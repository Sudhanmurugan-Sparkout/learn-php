<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class ="main">
    <form action="login.php" method="post">
        <h2>Log in</h2>
        <div class="input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input">
            <label for="password">Password</label>
            <input type="password" name="login_password" id="password">
        </div>
        <div>
            <p ></p>
        </div>
        <button type="submit" class ="btn" name="submit_login">Log in</button>
        <div>
            <p>Do you have an Account? <a href="signup.html"><b>Sign Up </b></a> </p>
        </div>
        <div>
            <h3><?php 
            if(isset($_POST["submit"])){
                echo $_GET["message"];
            }
            ?></h3>
        </div>
    </form>
    </div>
    
</body>
</html>
