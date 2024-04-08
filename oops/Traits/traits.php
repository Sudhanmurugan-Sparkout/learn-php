<?php 

trait a{

    function message1(){
        return "we are learn about trait";
    
    }
}


class single_trait{

    use a;
}

$obj= new single_trait;
 echo $obj->message1();


?>