
<?php 

include_once 'database.php';
if(isset($_GET["price"])){


    $price=$_GET["price"];
   //echo $price;
    $filter="select * from product where price between $price";
    
    $result=mysqli_query($conn,$filter);
    //print_r($result);
    if($result){
        while ($fetch=mysqli_fetch_assoc($result)){
  
?>

<div >
            <div ><img src="<?php echo $fetch["Image"] ?>" alt="" height="300px" width="230px"></div>
            <div><?php echo $fetch["product_name"] ?></div>
            <div>$<?php echo $fetch["price"] ?></div>
      </div>
<?php 
        }
    }
}
?>

