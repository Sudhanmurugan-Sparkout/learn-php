<?php 
 
class demo1{
private $name;
private $age;

function set_name($name,$age){

    $this->name=$name;
    $this->age=$age;
}

function get_name(){
    return $this->name . $this->age;
}

}


?>