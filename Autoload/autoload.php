<?php 

spl_autoload_register('myclasses');

function myclasses($class){

    $path="classes/";
   $pathExt= "class.php";
    $fullname= $path . $class . $pathExt;
  
    include_once $fullname;
}

?>  