<?php 

//default constructor : the default value is given


class name{
    public $name;

    function __construct($name="sudhan"){
      
        $this->name=$name;
    }
    
    function get_name(){
        return $this->name;
    }

}

$person=new name();
 echo $person->get_name();


?>