<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class ="main">
    <form action="login.php" method="post">
        <h2>Log in</h2>
        <div class=" form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class=" form-group">
            <label for="password">Password</label>
            <input type="password" name="login_password" id="password" class="form-control" require="">
        </div>
        
        <button type="submit" class ="btn btn-primary" name="submit_login">Log in</button>
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
