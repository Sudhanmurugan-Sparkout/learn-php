<?php 
 session_start();

 echo $_SESSION["name"];

 $_SESSION["name"]="madhan". "<br>"; //change the value

 echo $_SESSION["name"];
 print_r($_SESSION);

 unset($_SESSION["colour"]); //we cna delete the key 
 
 ?>