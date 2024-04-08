<?php 

abstract class mobiles{

    public $brand;
    function set_brand($name){
        $this->brand=$name;
    }

    abstract function get_brand();
    
}

class oppo extends mobiles{
    function get_brand(){
         
        return " Tony Chen is the owner of $this->brand";
    }
}

class vivo extends mobiles{
    function get_brand(){
         
        return "Shen Wei is the owner of $this->brand";
    }
}

class one_plus extends mobiles{
    function get_brand(){
         
        return "Pete Lau Carl Pei is the owner of $this->brand";
    }
}

$mobile1= new oppo;
$mobile1->set_brand("oppo");
 echo $mobile1->get_brand() . "<br>";

$mobile2= new vivo;
$mobile2->set_brand("vivo");
 echo $mobile2->get_brand() . "<br>";

 $mobile3= new one_plus;
$mobile3->set_brand("one_plus");
 echo $mobile3->get_brand() . "<br>";

 $mobile=array($mobile1,$mobile2,$mobile3);
print_r($mobile);
?> 