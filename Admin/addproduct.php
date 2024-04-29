<?php 
include_once 'database.php';
if(isset($_POST["add_submit"])){

$name=$_POST["add_name"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$stock=$_POST["stock"];
$category_id=$_POST["category_id"];

$insert="INSERT INTO product(product_name,product_brand,price,stock,category_id)values('$name','$brand','$price','$stock','$category_id')";
$ins_result=mysqli_query($conn,$insert);
if($ins_result){
    header("location:product.php?insert_message=you data has been updated");
}else{
    echo mysqli_error($conn);
}

}






?>