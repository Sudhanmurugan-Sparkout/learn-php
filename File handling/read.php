<?php 

 readfile("f1.txt"); // TO read the file

 echo  readfile("f1.txt"); // if we print it will give the number of bytes it read
echo "<br>";
echo "<br>";

echo fopen("f1.txt","r");
$txt= fopen("f1.txt","r");
 echo fread($txt,filesize("f1.txt")); // read the file

 echo "<br>";
 echo "<br>";

 $get=fopen("f1.txt","r");  // read the file line by line
 echo fgets($get);
 echo fgets($get);
 echo fgets($get);        //every call read the next line of the file

 echo "<br>";
 echo "<br>";

 $get=fopen("f1.txt","r");  // read the file character by character
 echo fgetc($get);
 echo fgetc($get);
 echo fgetc($get);

 echo "<br>";
 echo "<br>";

 $get=fopen("f1.txt","r");
 while(!feof($get)){
    echo fgets($get) ."<br>";
}
fclose($get);

?>