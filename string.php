  <?php 
  $username="sudhan";


  echo strlen($username) ."<br>";                           //length of the string

  echo strtoupper($username) . "<br>";                     //to change the string upper case

  echo strtolower($username) . "<br>";                   //to change the string Lower case

  echo strrev($username) . "<br>";                         // to reverse the string

  echo  strpos("good morning", "morning") . "<br>";         //to find the position of the word or letter

  echo  strpos("good morning", "d") . "<br>";

  echo trim(" keep learning ") . "<br>";                      // to cut the whitespace of both left and right of the string

  echo str_replace("morning","evening","good morning") . "<br>";   // to replace the word

  
  
  
  ?>