<?php 

include_once 'traits.php';

trait b{

    function message2(){

        return " we can use multiple traits in a class";
    }
}

trait c{

    use  b;

    function message3(){

        return "we can also use another trait inside the trait";
    }

}

class multiple_trait{

    use a,c;

}

$newobj= new multiple_trait;

 $newobj->message1();
echo "<br>";

echo $newobj->message2();
echo "<br>";

echo $newobj->message3();
echo "<br>";

?>