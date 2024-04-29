<?Php 
include_once 'header.php';
include_once 'database.php';


if(isset($_GET["id"])){
    $id= $_GET["id"];


$update_select="SELECT *from product where id= $id";
$update_result=mysqli_query($conn,$update_select);
$select_row=mysqli_fetch_assoc($update_result);
}

if(isset($_POST["update_submit"])){

    if(isset($_GET["id_new"])){
        $id_new=$_GET["id_new"];
        echo$id_new;
    }
    $update_name=$_POST["add_name"];
    $update_brand=$_POST["brand"];
    $update_price=$_POST["price"];
    $update_stock=$_POST["stock"];
    $category_id=$_POST["category_id"];

    $update_query=" UPDATE product set product_name= '$update_name',product_brand='$update_brand',price='$update_price',stock='$update_stock',category_id='$category_id' where id=$id_new";
    $update_result=mysqli_query($conn,$update_query);
    if($update_query){
        header("location:product.php?message=you data updated");
    }else{
        echo "err :" . mysqli_error($conn);
    }

}
?>





<form action="updateproduct.php?id_new=<?php echo $id?>" method="post">

<div class="modal-body">
            <div class="form-group">
                <label for="add_name">Name</label>
                <input type="text" class="form-control" id="add_name" name="add_name" value="<?Php echo $select_row["product_name"] ?>">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $select_row["product_brand"]?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $select_row["price"]?>">
            </div>
            <div class="form-group">
                <label for="stock">stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $select_row["stock"]?>">
            </div>
            <div class="form-group">
                <label for="category_id">Category Id</label>
                <input type="text" class="form-control" id="category_id" name="category_id" value="<?php echo $select_row["category_id"]?>">
            </div>
            <div class="form-group">
                <input type="submit" name="update_submit" value="update" class="btn btn-success">
            </div>
</form>