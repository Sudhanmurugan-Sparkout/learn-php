<?php 

include 'class3.php';

use second\sub\example\codes\a;

echo a:: $name;
echo "<br>";

$obj = new a;

echo $obj->get_message();

?>