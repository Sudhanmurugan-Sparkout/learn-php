<?Php 
include_once 'header.php';
include_once 'database.php';

if(isset($_GET["id"])){
    $id= $_GET["id"];
}

$update_select="SELECT *from user_information where id= $id";
$update_result=mysqli_query($conn,$update_select);
$select_row=mysqli_fetch_assoc($update_result);
// print_r($select_row);

if(isset($_POST["update_submit"])){

    if($_GET["id"]){
        $id_new=$_GET["id"];
    }
}


?>
<form action="update.php?id_new=<?php $_GET["id"]?>" method="post">
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
            <br>
            
            <div class="form-group">
                <input type="submit" name="update_submit" value="update" class="btn btn-primary">
            </div>
</form>