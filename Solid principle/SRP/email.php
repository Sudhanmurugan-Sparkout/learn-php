<?php 

include_once 'userDetails.php';

class email{

     static $check=array("sudhanmurugan27@gmail.com","abc123@gmail.com","qwe321@gmail","asd234@gmail");

     public static function emailValidate($email){
     if(in_array($email,self::$check)){

      return true;
     }
     else{

      return false;
   }
}
}
?>