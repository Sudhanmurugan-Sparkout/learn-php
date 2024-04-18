<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
    <input type="radio" name="food" value="pizza">pizza <br>
    <input type="radio" name="food" value="burger"> burger <br> 
    <input type="radio"  name="food" value="sandwich">sandwich <br>
    <input type="submit" name="submit" value="submit">
    <p id="ukyl"></p>
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
    $food=null;
    if(isset($_POST["food"])){
        $food=$_POST["food"];
        switch($food){
            case "pizza":
                echo "you ordered pizza";
                break;
                case "burger":
                    echo "you ordered burger";
                    break;
                    case "sandwich":
                        echo "you ordered sandwich";
                        break;
        }
    }
}
?>