<?php 
 include_once 'userDetails.php';
 include_once 'email.php';

 $obj= new UserDetails("sudhan","sudhanmurugan27@gmail.com",122355);
 
if (email::emailValidate($obj->email)){

    echo " Thankyou for log in!..";
}else{

    echo " please check your email";
}



?>