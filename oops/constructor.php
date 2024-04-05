<?php 

//parameterized constructor : to give the value into parameters

 class mobile{

    public $name;
    public $colour;
    public $storage;

    public function __construct($name,$colour,$storage)
    {
        $this->name=$name;
        $this->colour=$colour;
        $this->storage=$storage;
    }


 }


$mobile1= new mobile("oppo","black","64gb");

echo $mobile1->name;
echo $mobile1->colour;
echo $mobile1->storage;
echo "<br>";
print_r($mobile1);


?>