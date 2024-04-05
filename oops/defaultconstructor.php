<?php 

//default constructor : the default value is given


class name{
    public $name;

    function __construct(){
      
        $this->name="sudhan";
    }
    
    function get_name(){
        return $this->name;
    }

}

$person=new name();
 echo $person->get_name();


?>