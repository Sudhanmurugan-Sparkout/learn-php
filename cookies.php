<?php 

$name="user";
$value="sudhan";

setcookie($name,$value,time()+60*60,"/");
if(isset($_COOKIE[$name])){
    echo "cookie name : " . $name . " ,the value is :" . $value;

}else{
    echo "you don't create a cookie";
}

echo "<br>";


//Delete cookie

$name="user";
$value="sudhan";

setcookie($name,$value,time()-1,"/");
if(isset($_COOKIE[$name])){
    echo "cookie name : " . $name . " ,the value is :" . $value;

}else{
    echo "you don't create a cookie";
}

print_r  (count($_COOKIE));

echo "<br>";
echo "<br>";

//count visit

$countvisit = 0;
if(isset($_COOKIE['count_add']))
{
    $countvisit = $_COOKIE['count_add'];
    $countvisit ++; 
}

setcookie('count_add',$countvisit);       
echo "You have visited ".$countvisit." times";
echo "$countvisit";

?>
