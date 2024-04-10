<?php 

include_once 'paymentclass.php';
include_once 'add.php';

$obj = new buyProduct();
$obj1= new phonepay($obj);
echo $obj1->paymentprocess("gpay");




 ?>