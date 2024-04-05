<?php 

// Inheritance : when a calass derived from another class

class college {

  public  $name;
   public $location;

  public function info($name,$location){
   $this->name=$name;
   $this->location=$location;
   echo " the college name is $this->name , ";
   echo "it located at $this->location .";
   }

} 

class department extends college{

    public $department;

  function __construct($department)
  {
    $this->department=$department;
    echo " the department is $this->department ,";

  }
    
  }


$college=new department("civil");
$college->info("alagappa university","karaikudi");
?>