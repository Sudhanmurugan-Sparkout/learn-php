<?php 
 session_start();

 echo $_SESSION["name"]; //we can acces a data in anyplace but we can start the session

 echo $phone;  // but normal variable does not access

 $_SESSION =["car"=>"volvo","colour"=>"red"];
 print_r($_SESSION)
?>