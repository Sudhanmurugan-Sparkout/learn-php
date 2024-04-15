
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="arraytask.php" method="post">
<div>
    <label for="input">Input</label>
    <input type="text" name="input" id="name">
   </div>
   <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>

<?php 

 if(isset($_POST["submit"])){         // user input is are there in array or not

$array= array(1,2,3,4,5,6,7,8,9,0);
$check = in_array($_POST["input"],$array);

if($check==true){
    echo "the value is here";
}else{
    echo "the value is not here";
}

 }


?>