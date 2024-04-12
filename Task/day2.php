<?php 

/* Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.
ex:Input: nums1 = [1,3], nums2 = [2]
Output: 2.00000*/

$array=array(1,3);
$array1=array(2);
$merge=array_merge($array,$array1);
$sort_merge=sort($merge);

$arr_len=count($merge);

if(($arr_len)%2==0){
       
    $median=(($arr_len) + 1)/2;
    $value=$merge[$median -1];
    echo "The median is " . $value;

}else{

    $median= (($arr_len)/2 + ((($arr_len)/2)+1))/2;
    $value=$merge[$median -1];

    echo "The median is ". $value;
}


?>