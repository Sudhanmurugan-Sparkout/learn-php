<?php 
  $append=fopen("f2.txt","a");
  $text=" this is append\n";
  fwrite($append, $text);
  $text=" it is used to added the text to exising file\n";
  fwrite($append, $text);
$text="it is start with end of the pointer";
fwrite($append, $text);
echo $append;


?>