
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
        <div>
            <label for="country">Country</label>
            <input type="text" name="country" id="country">
        </div>
        <input type="submit" value="capital" name="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
$capitals=array("india"=>"New delhi","usa"=>"WASHINGTON","japan"=>"tokyo","china"=>"Beijing");

$capital=$capitals[strtolower($_POST["country"])];
echo $capital;
}
?>