<?php 

// $array1=array(3,1,6,2,8);
// $array2=array(9,4,7,2,8,4,2);
// foreach($array2 as $merge){
//     $array1[]=$merge;
// }

//$unique=array_unique($array1);
$unique=array(1,8,6,5,4,3,2);

foreach ($unique as $a){

     for($j=0;$j<count($unique)-1;$j++){

        if($unique[$j+1]<$unique[$j]){
           $new = $unique[$j+1];
           $unique[$j+1]=$unique[$j];
           $unique[$j]=$new;

        }
     }

}
print_r($unique);

?>