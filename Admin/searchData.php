<?php 
include_once 'database.php';
// print_r('testing', $_GET['data']);
if(isset($_GET["check"])){
    $check='';
    setcookie('key',$check,time()-3600,'/');
    if(isset($_GET['data'])){
        $data=$_GET["data"];
        setcookie('key',$data,time()+600*600,'/');
    }
  

    $search="select*from product where product_name like '%$data%'";
   $result= mysqli_query($conn,$search);
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
}else{
    $store = '';
    if(isset($_COOKIE['key'])){
        $store=$_COOKIE['key'];
    }
        $sql="select * from product where product_name like '%$store%'";
        $result= mysqli_query($conn,$sql); 
      

        while ($row = mysqli_fetch_assoc($result)){
            ?>
         <div>
            <div ><img src="<?php echo $row["Image"] ?>" alt="" height="300px" width="230px"></div>
            <div><?php echo $row["product_name"] ?></div>
            <div><?php echo $row["product_brand"] ?></div>
      </div>
<?php 
        }
    }



