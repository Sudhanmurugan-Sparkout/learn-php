<?php

include_once 'database.php';

if (isset($_GET["id"])) {

    $delete_id = $_GET["id"];

    $delete_query = "delete from category WHERE id=$delete_id";
    $delete_result = mysqli_query($conn, $delete_query);
    if ($delete_result) {
        header("location:category.php?");
    } else {
        echo "err :" . mysqli_error($conn);
    }
}
