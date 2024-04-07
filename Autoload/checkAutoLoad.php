<?php 
include 'autoload.php';

$name = new demo1;
$name->set_name("sudhan", 21);
echo $name->get_name();
echo "<br>";
$name2 = new persons;
$name2->set_name("sudhan",22,"aranthangi");
 echo $name2->get_name();

?>
