<?php 
 interface phones{

     public function get_message();


 }
 interface location{
      
   
    public function get_location();
 }


class oppo implements phones,location{
    public function get_message(){
         
        return " Tony Chen is the owner of oppo";
    }
    
    public function get_location(){

       return " The headquarders : Dongguan, Guangdong , China";

      }
    }
class vivo implements phones,location{
    public function get_message(){
         
        return "Shen Wei is the owner of vivo";
    }
   
    public function get_location(){

        return "Headquartered in Dongguan";
    }
}

class one_plus implements phones,location{
    public function get_message(){
         
        return " Pete Lau Carl Pei is the owner of one plus";
    }
 
    public function get_location(){

        return " The headquarders : airan Building, Futian District, Shenzhen, Guangdong , China";
    }
}

$oppo= new oppo();
echo $oppo->get_message() . " ";
echo $oppo->get_location() . "<br>";

$vivo= new vivo();
echo $vivo->get_message() . " ";
echo $vivo->get_location() . "<br>";

$one_plus= new one_plus();
echo $one_plus->get_message() . " ";
echo $one_plus->get_location() . "<br>";

?>