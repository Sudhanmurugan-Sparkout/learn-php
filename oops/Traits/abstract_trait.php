<?php

include_once 'multiple_trait.php';


trait d{

    abstract function message4();
}

class abstract_trait{

    use a,c,d;
    function message4(){
        return " we can also use abstract class";
    }
}

$obj = new abstract_trait;
 echo $obj->message4();

?>