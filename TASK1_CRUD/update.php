<?Php 
include_once 'header.php';
include_once 'database.php';


if(isset($_GET["id"])){
    $id= $_GET["id"];


$update_select="SELECT *from user_information where id= $id";
$update_result=mysqli_query($conn,$update_select);
$select_row=mysqli_fetch_assoc($update_result);
// print_r($select_row);
}

if(isset($_POST["update_submit"])){

    if(isset($_GET["id_new"])){
        $id_new=$_GET["id_new"];
    }
    $update_name=$_POST["add_name"];
    $update_lname=$_POST["add_lname"];
    $update_age=$_POST["add_age"];
    $update_colour=$_POST["add_colour"];

    $update_query=" UPDATE user_information set user_name= '$update_name',last_name='$update_lname',age='$update_age',favourite_colour='$update_colour' where id='$id_new'";
    $update_result=mysqli_query($conn,$update_query);
    if($update_query){
        header("location:crud.php?update_msg=you data has been updated");
    }else{
        echo "err :" . mysqli_error($conn);
    }

}
?>





<form action="update.php?id_new=<?php echo $id?>" method="post">
<div class="form-group">
                <label for="add_id">Id</label>
                <input type="text" class="form-control" id="add_id" name="add_id" value="<?php echo $select_row["id"]?>">
            </div>
            <div class="form-group">
                <label for="add_name">Name</label>
                <input type="text" class="form-control" id="add_name" name="add_name" value="<?php echo $select_row["user_name"]?>">
            </div>
            <div class="form-group">
                <label for="add_lname">Lastname</label>
                <input type="text" class="form-control" id="add_lname" name="add_lname" value="<?php echo $select_row["last_name"]?>">
            </div>
            <div class="form-group">
                <label for="add_age">Age</label>
                <input type="text" class="form-control" id="add_age" name="add_age" value="<?php echo $select_row["age"]?>">
            </div>
            <div class="form-group">
                <label for="add_colour">Colour</label>
                <input type="text" class="form-control" id="add_colour" name="add_colour" value="<?php echo $select_row["favourite_colour"]?>">
            </div>
            
            <div class="form-group">
                <input type="submit" name="update_submit" value="update" class="btn btn-success">
            </div>
</form>