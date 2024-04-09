<?php 

include_once 'paymentclass.php';
include_once 'add.php';

$obj = new phonepay();
echo $obj->paymentprocess("gpay");

echo "<br>";

$obj1 = new buyProduct();
echo $obj1->paymentprocess("gpay");

?>