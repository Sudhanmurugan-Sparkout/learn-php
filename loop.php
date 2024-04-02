<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop.php" method="post">
        <div>
            <label for="name">word</label>
            <input type="text" name="name" id="name">
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
    $a="";
    for($i=strlen($_POST["name"])-1;$i>=0;$i--){
        $a=$a . $_POST["name"][$i];
        
    }
    
    if(strrev($_POST["name"])==$_POST["name"]){
        echo "it is pallindrom";
    }else{
          echo "it is not pallindrom";
    }
}

?>