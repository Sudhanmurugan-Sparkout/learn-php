<?php 

//constant variable - the variable value cannot be changed 

define("name","sudhan");
echo name ."<br>";

const course ="php";

function check_define(){
    echo" Define : it is also used in inside the function" . "<br>"; //case sensitive
    echo name;
    echo "<br>";
    echo course;  

}

check_define();
echo "<br>";

const age=22;
echo age;
 function demo_const(){    // cannot declare const variable directly inside the function
    return age;
 }
echo demo_const();









?>