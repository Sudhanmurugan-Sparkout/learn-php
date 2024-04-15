<?php 

//multi dimensonal array

$fruits=array(
    array("name"=>"orange","price"=>20),
    array("name"=>"apple","price"=>30),
    array("name"=>"banana","price"=>10)

);

$fruits[]=["name"=>"watermelon","price"=>15];


$fruits[1]+=["colour"=>"red","size"=>"medium"];

$fruits[1]["name"]="ootyapple";
print_r($fruits[1]);


//indexed array

$cars=["volvo","BMW","Audi"];

array_push($cars,"toyota","Benz");
print_r($cars[4]);
echo"<br>";

$cars[4]="nissan";
print_r($cars[4]);
echo"<br>";


// array_map

$numbers=[1,2,3,4,5];

function multiple($n){

    return $n*$n;

}

$num= array_map("multiple",$numbers);
print_r($numbers);
echo"<br>";
print_r($num);
?>