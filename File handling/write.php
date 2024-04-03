<?php 
$write=fopen("f3.txt","w");
 
$add="Hi this is Sudhan/n";
fwrite($write,$add);
$add1="i am from pudukottai";
fwrite($write,$add1);
 fclose($write);

$txt=fopen("f2.txt","w");
$t1=" it erase the content,";
fwrite($txt,$t1);
$t1=" it overwritting the file";
fwrite($txt,$t1);


// $a=fopen
?>