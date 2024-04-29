<?php
include_once 'database.php';
if (isset($_POST["add_submit"])) {

    $id = $_POST["add_id"];
    $name = $_POST["category_name"];
    $insert = "INSERT INTO category(id,category_name)values('$id','$name')";
    $ins_result = mysqli_query($conn, $insert);
    if ($ins_result) {
        header("location:category.php?insert_message=you data has been updated");
    } else {
        echo mysqli_error($conn);
    }
}
