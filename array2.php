<?php

// Dynamic merge 

$names=array("sudhan","boobalan","ruban","saran");
$ages=array(22,26,27,29);
$merge=array();
for($i=0;$i<count($names);$i++){

    $merge[]=array("name"=>$names[$i],"age"=>$ages[$i]);
}

print_r($merge);

?>