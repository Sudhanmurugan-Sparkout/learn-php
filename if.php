<?php 
$age=$_POST["Age"];
if(isset($age)) {
    if($age>=18) {
        echo "you can vote";
    } else {
        echo "you cannot vote";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if.php" method="post">
        <label for="name">User name</label>
        <input type="text" name="name" id="name">
        <br>
        <div>
            <label for="age">Age</label>
            <input type="text" name="Age" id="age">
        </div>
        <div>
            <label for="citizen">Country</label>
            <input type="text" name="Citizen" id="citizen">
        </div>
        <input type="submit" value="Check">
    </form>
</body>
</html>