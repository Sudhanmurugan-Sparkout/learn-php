<?php 

$a="sudhan@27";
var_dump($a);      //var_dumb is used to identify the datatype
echo "<br>";
$b=123;
var_dump($b);
$c=12.3;
var_dump($c);
echo "<br>";
$d=true;
var_dump($d);
echo "<br>";
$e=array(1,2,3); 
var_dump($e);
echo "<br>";

// add to variables

$num1=12;
$num2=34;
$num3=$num1+$num2;
echo  "the added value is : $num3" . "<br>";

//variable scope
//global variable
$name="sudhan";
function name(){
    echo "It is global variable, it is used outer of the function anywhere";
}
echo $name . "<br>";
name();

//Local variable

echo "<br>";
echo "Local variable used only inside of the function";
echo "<br>";


//global variable while using with function

$fruit="apple";

function fruit(){
    global $fruit;
    echo $fruit;
}
fruit();

?>