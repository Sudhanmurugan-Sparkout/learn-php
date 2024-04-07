<?php 

class demo_scope{

    static $name="sudhan";
    static $age = 22;
    static function message(){

        return self :: $name;
    
    }
} 
 
class demo_1 extends demo_scope{

    static function info(){
        return parent::$age;
    }
}

echo demo_scope::$name;
echo "<br>";
echo demo_scope :: message();
echo "<br>";
echo demo_1 ::info();
?>