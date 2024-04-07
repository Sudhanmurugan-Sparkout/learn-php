<?php 

class persons{
  
public $name;
public $age;
public $location;

public function set_name($name,$age,$location){
    $this->name=$name;
    $this->age=$age;
    $this->location=$location;
}
function get_name(){
    return $this->name . $this->age . $this->location;

}
}




?>