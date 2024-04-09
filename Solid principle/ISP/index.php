<?php 
 include_once 'customer1.php';
 include_once 'customer2.php';

 $veg= new vegCustomer();
 echo $veg->vegmenu();
 echo "<br>";

 $nonveg= new nonvegCustomer();
 echo $nonveg->menu();
?>