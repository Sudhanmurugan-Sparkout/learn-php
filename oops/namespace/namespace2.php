<?php 

 include_once 'class1.php';
 include_once 'class2.php';
 use firstclass\a;
  echo a::$name;
  echo "<br>";  

  echo \a::$name;
  echo "<br>";  

  $obj=new a;
  echo $obj->get_message();
  echo "<br>";  

 $obj=new \a;
  echo $obj->get_message();
  
 ?>