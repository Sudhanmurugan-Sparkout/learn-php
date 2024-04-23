<?php 
 include_once 'header.php';
 include_once 'database.php';
?>

        <div class="box1">
        <h2>UserDetails</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add_details</button>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>lastname</td>
                    <td>age</td>
                    <td>Colour</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                $select_query= "select*from user_information";
                $result=mysqli_query($conn,$select_query);
                if($result){
                    while($fetch=mysqli_fetch_assoc($result)){

                   ?>
                        <tr>
                        <td><?php echo $fetch["id"]?></td> 
                    <td><?php echo $fetch["user_name"]?></td>
                    <td><?php echo $fetch["last_name"]?></td>
                    <td><?php echo $fetch["age"]?></td>
                    <td><?php echo $fetch["favourite_colour"]?></td>
                    <td><a href="update.php?id=<?php echo $fetch["id"]?>" class="btn btn-success">Update</a></td>
                    <td><a href="Delete.php?id=<?php echo $fetch["id"]?>" class="btn btn-danger ">Delete</a></td>
                </tr>
                <?php
                    }
                }
                ?>
                
                
                
            </tbody>
        </table>
        <div id="message">
                <h3><?php  
                if(isset($_GET["message"])){

                    echo $_GET["message"];
                }
                
                ?></h3>
            </div>
            <div id="insert">
                <h3><?php if(isset($_GET["insert_message"])){
                    echo $_GET["insert_message"];
                      }
                   ?></h3>
            </div>
            <div id="delete">
                <h3><?php if(isset($_GET["delete_msg"])){
                    echo $_GET ["delete_msg"];
                    }?></h3>
            </div>
            <div id="update">
                <h3><?php if(isset($_GET["update_msg"])){
                    echo $_GET["update_msg"];
                    }?></h3>
            </div>


<form method="post" action="add.php">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label for="add_id">Id</label>
                <input type="text" class="form-control" id="add_id" name="add_id">
            </div>
            <div class="form-group">
                <label for="add_name">Name</label>
                <input type="text" class="form-control" id="add_name" name="add_name">
            </div>
            <div class="form-group">
                <label for="add_lname">Lastname</label>
                <input type="text" class="form-control" id="add_lname" name="add_lname">
            </div>
            <div class="form-group">
                <label for="add_age">Age</label>
                <input type="text" class="form-control" id="add_age" name="add_age">
            </div>
            <div class="form-group">
                <label for="add_colour">Colour</label>
                <input type="text" class="form-control" id="add_colour" name="add_colour">
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add" name="add_submit">
      </div>
    </div>
  </div>
</div>

    </div>
    </form>
</body>
</html>