<?php 

 $obj= file_get_contents("data.json");
 $lists=json_decode($obj);

 foreach($lists as $list){
 echo  "<li>" . $list->name . " : " . "Rs " .$list->price ."</li>";
 }

 echo "<br>";
 echo "<h3> Data 2 </h3>";
 echo "<br>";

 $obj2=file_get_contents("data2.json");
 $datas=json_decode($obj2);
 foreach($datas as $data){

    if($data->age>=18){
        $age="eligible to vote";
    }else{
         $age="not eligible to vote";
    }
    if($data->gender=="male"){
        $gender="he";
    
    }else{
        $gender='she';
    }

    if($data->proofs->voter_id){
        $proof=" and $gender also has a voter id";
    }else{
        $proof="but $gender hasn't a voter id ";
    }
    echo "<li>" . $data->name . " is " .$data->age ." Years old, $gender is " . $age . $proof ."</li>";
 }
?>