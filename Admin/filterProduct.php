
<?php 

include_once 'database.php';
if(isset($_GET["name"])){


    $name=$_GET["name"];
   // echo $name;
    $filter="select * from product where product_name='$name'";
    
    $result=mysqli_query($conn,$filter);
    //print_r($result);
    if($result){
        while ($fetch=mysqli_fetch_assoc($result)){
  
?>

<div >
            <div ><img src="<?php echo $fetch["Image"] ?>" alt="" height="300px" width="230px"></div>
            <div><?php echo $fetch["product_name"] ?></div>
            <div><?php echo $fetch["product_brand"] ?></div>
      </div>
<?php 
        }
    }
}
?>

</tbody>
</table>