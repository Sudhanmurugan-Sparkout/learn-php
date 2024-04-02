<?php 

function addition(){
    $a=1;
    $b=2;
     $c=$a+$b;
     echo "$c";

}
addition();
echo"<br>";

//function with Arguments

function multiplication($c,$d){

    $mul=$c*$d;
    echo $mul . "<br>";

}

multiplication(2,45);

//Default Function

function demo_default($name,$age=18){
    echo " $name and your age is $age" ."<br>";

}
 demo_default("sudhan",22);
 demo_default("madhan");
 demo_default("mahila",20);
 demo_default("akila");

 //return value

 function demo_return($a,$b){
    
     $c=$a+$b;
     return $c;
 }

 echo demo_return(2,3);

?>