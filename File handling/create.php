<?php 
 $craete=fopen("f3.txt","x"); // "x" mode is create file and write but exiting file make eeror

 $create=fopen("f4.txt","x");

 $add="the 'x' mode is used to create a new file\n";
 fwrite($create,$add);
 $add="it already file not open it make warning\n ";
 fwrite($create,$add);
 $add="it can only one time to write ,you wish to add more lines\n ";
 fwrite($create,$add);
$add="you delete first existing file\n";
fwrite($create,$add);

?>