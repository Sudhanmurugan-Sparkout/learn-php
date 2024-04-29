<?Php

include_once 'database.php';


if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $update_select = "SELECT *from category where id= $id";
    $update_result = mysqli_query($conn, $update_select);
    $select_row = mysqli_fetch_assoc($update_result);
}

if (isset($_POST["update_submit"])) {

    if (isset($_GET["id_new"])) {
        $id_new = $_GET["id_new"];
        // echo$id_new;
    }
    $update_id = $_POST["add_id"];
    $update_name = $_POST["category_name"];

    $update_query = " UPDATE category set id= '$update_id',category_name='$update_name' where id=$id_new";
    $update_result = mysqli_query($conn, $update_query);
    if ($update_query) {
        header("location:category.php?message=you data updated");
    } else {
        echo "err :" . mysqli_error($conn);
    }
}
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

        <form action="updateCategory.php?id_new=<?php echo $id ?>" method="post">

            <div class="modal-body">
                <div class="form-group">
                    <label for="add_id">ID</label>
                    <input type="text" class="form-control" id="add_id" name="add_id" value="<?php echo $select_row["id"] ?>">
                </div>
                <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo $select_row["category_name"] ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_submit" value="update" class="btn btn-success">
                </div>
        </form>