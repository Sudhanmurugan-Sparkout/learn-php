<?php 
 include_once 'userDetails.php';
 include_once 'email.php';

 $obj= new UserDetails("sudhan","sudhanmurugan27@gmail.com",122355);
 
email::emailValidate($obj);



?>