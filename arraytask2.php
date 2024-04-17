<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="arraytask2.php" method="post">
<div>
    <label for="input">Input</label>
    <input type="text" name="input[]" id="name">
   </div>
   <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>

<?php 

session_start(); 



if (isset($_POST["submit"])) {            // user give the all input to store in array
    if (!empty($_POST["input"])) {
        
        $_SESSION['inputs'][] = $_POST["input"];
       
    } else {
        echo "Please enter at least one output";
    }
    print_r($_SESSION['inputs']);

}
?>














