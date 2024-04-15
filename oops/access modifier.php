<?php
//public is default - use everywhwere

class access_modify{

private $name;            //only give input to public function

public function set_name($name){
    
    $this->name=$name;
    
}

public function get_name(){
    return $this->name;
}

protected function info(){

    return " protected class are accesss only within a class and derived class";
}

}

class access extends access_modify{

   public function get_info(){

      return  parent:: info();
   }

}

$name= new access();
$name->set_name("sudhan\n");
echo $name->get_name();
$name->set_name("madhan\n");
echo $name->get_name();
echo $name->get_info();

?>