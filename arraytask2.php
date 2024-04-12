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

 
// if(isset($_POST["submit"])) {
//     if(!empty($_POST["input"])) {
//         $array = array(); 
//         foreach($_POST["input"] as $input) {
            
//             $array[] = $input;
//         }
//         print_r($array); 
//     } else {
//         echo "Please enter at least one output";
//     }
// }




session_start(); 


if (!isset($_SESSION['inputs'])) {
    $_SESSION['inputs'] = array();
}

if (isset($_POST["submit"])) {
    if (!empty($_POST["input"])) {
        
        $_SESSION['inputs'][] = $_POST["input"];
       
    } else {
        echo "Please enter at least one output";
    }
    print_r($_SESSION['inputs']);

}
?>














