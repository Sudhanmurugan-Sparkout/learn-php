<?php 

include_once 'userDetails.php';

class email{

     static $check=array("sudhanmurugan27@gmail.com","abc123@gmail.com","qwe321@gmail","asd234@gmail");

     public static function emailValidate(UserDetails $email){
     if(in_array($email->email,self::$check)){

        echo "thank you for visiting our side ";
     }else{
        echo  "Your emails not validate please check your email";
     }
}
}
?>