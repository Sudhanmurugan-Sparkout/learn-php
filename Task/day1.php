<?php     

//Task: Create a PHP class called Car with the following properties and methods 

?>
<!DOCTYPE html>        
<html lang="en">             
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="day1.php" method="post">
<div>
    <label for="brand">Brand</label>
    <input type="text" name="brand" id="brand">
</div>
<br>
<div>
    <label for="model">Model</label>
    <input type="text" name="model" id="model">
</div>
<br>
<div>
    <label for="year">Year</label>
    <input type="number" name="year" id="year">
</div>
<br>
<div>
    <label for="colour">Colour</label>
    <input type="text" name="colour" id="colour">
</div>
<br>
<button name="submit" value="submit">Submit</button>
</form>

</body>
</html>



<?php 
      
 
class car{

private $brand;
private $model;
private $year;
private $colour;


public function set_data($brand,$model,$year,$colour){

    $this->brand=$brand;
    $this->model=$model;
    $this->year=$year;
    $this->colour=$colour;


}

public function get_data(){

   echo "The car brand is : $this->brand" . "<br>";   
   echo "The car model is : $this->model" . "<br>" ;
   echo  "The car launch year is : $this->year" . "<br>";
   echo "The car colour is :$this->colour" . "<br>";

}


}

if(isset($_POST["submit"])){
$obj= new car();
$obj->set_data($_POST["brand"],$_POST["model"],$_POST["year"],$_POST["colour"]);
$obj->get_data();
}
?>




