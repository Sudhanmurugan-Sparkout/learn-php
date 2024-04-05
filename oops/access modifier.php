<?php
//public is default - use everywhwere

class access_modify{

private $name;            //only give input to public function

public function set_name($name){
    
    $this->name=$name;
    
}

function get_name(){
    return $this->name;
}

}


$name= new access_modify();
$name->set_name("sudhan\n");
echo $name->get_name();
$name->set_name("madhan\n");
echo $name->get_name();


?>