<?php 

//A destructor is called when the script is stopped or exited.

class pencil { 
    public $brand;
    public $colour;
    public $cost;


    public function __construct($brand,$colour,$cost){
        $this->brand=$brand;
        $this->colour=$colour;
        $this->cost=$cost;
    
    }
    
    public function __destruct(){
    
        echo "the brand of the pencil is : $this->brand"; 
        echo " and it colour is: $this->colour";
        echo " cost is : $this->cost rs " ;
    }   
}


$pencil1=new pencil("absara","black",5);
print_r($pencil1);
echo $pencil1->brand;  
?>