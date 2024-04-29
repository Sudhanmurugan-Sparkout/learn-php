<?php
include_once 'database.php';
include_once 'navbar.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="product.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1 id="heading1">Category</h1>
    <div class="container">

        <div class="box1">
            <h2>Category Details</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="button">Add</button>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Category_Name</td>

                </tr>
            </thead>
            <tbody>
                <?php

                $select_query = "select*from category";
                $result = mysqli_query($conn, $select_query);
                if ($result) {
                    while ($fetch = mysqli_fetch_assoc($result)) {

                ?>
                        <tr>
                            <td><?php echo $fetch["id"] ?></td>
                            <td><?php echo $fetch["category_name"] ?></td>
                            <td><a href="updateCategory.php?id=<?php echo $fetch["id"] ?>" class="btn btn-success">Update</a></td>
                            <td><a href="deleteCategory.php?id=<?php echo $fetch["id"] ?>" class="btn btn-danger ">Delete</a></td>
                        </tr>
                <?php
                    }
                }
                ?>



            </tbody>
        </table>

        <div id="message">
            <h3><?php
                if (isset($_GET["message"])) {

                    echo $_GET["message"];
                }

                ?></h3>
        </div>
        <div id="insert">
            <h3><?php if (isset($_GET["insert_message"])) {
                    echo $_GET["insert_message"];
                }
                ?></h3>
        </div>
        <div id="delete">
            <h3><?php if (isset($_GET["delete_msg"])) {
                    echo $_GET["delete_msg"];
                } ?></h3>
        </div>
        <div id="update">
            <h3><?php if (isset($_GET["update_msg"])) {
                    echo $_GET["update_msg"];
                } ?></h3>
        </div>


        <form method="post" action="Addcategory.php">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="add_id">ID</label>
                                <input type="text" class="form-control" id="add_id" name="add_id">
                            </div>
                            <div class="form-group">
                                <label for="category_name">Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name">
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




?>