<?php 

$array=array("name"=>"sudhan","age"=>22,"gender"=>"male");
$encode=json_encode($array);
echo $encode;

if(json_last_error()===JSON_ERROR_NONE){
    echo "the format is valid json format";

}else{
   echo "the format is invalid json format";
}

?>