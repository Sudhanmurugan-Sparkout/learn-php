<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            function changeFunc() {
                var selectBox = document.getElementById("selectbox1");
                var selectedValue = selectBox.options[selectBox.selectedIndex].value;


                $.ajax({
                    type: "get",
                    url: "fetch_product.php",
                    data: {
                        "id": selectedValue,
                        // "type": selectedValue,
                    },
                    //enum
                    dataType: "html",
                    success: function(response) {
                        $("#selectbox2").html(response);
                    }
                });
            }

            $("#selectbox1").change(function() {
                changeFunc();
            });

            function changeContent() {
                var selectBox2 = document.getElementById("selectbox2");
                var selectedValue2 = selectBox2.options[selectBox2.selectedIndex].value;
                //alert(selectedValue2);

                $.ajax({
                    type: "get",
                    url: "filterProduct.php",
                    data: {
                        "name": selectedValue2
                    },
                    dataType: "html",
                    success: function(response) {
                        $("#all_product").html(response);
                    }
                });
            }

            $("#selectbox2").change(function() {
                changeContent();
            });
        });
    </script>
    <style>
        #all_product {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
    </style>
</head>

<body>
    <?php
    include_once 'navbar.php';
    include_once 'database.php';
    include_once 'fetch_product.php'
    ?>
    <div class="container">
        <div class="select1">
            <select class="form-select" aria-label="Default select example" id="selectbox1" onchange="changeFunc()">
                <option selected>Category</option>

                <?Php
                $category = "Select*from category";
                $category_result = mysqli_query($conn, $category);
                if ($category_result) {
                    while ($fetch_category = mysqli_fetch_assoc($category_result)) {

                ?>
                        <option value="<?php echo $fetch_category["id"] ?>"> <?php echo $fetch_category["category_name"] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="select2">
            <select class="form-select" aria-label="Default select example" id="selectbox2" onchange="changeContent()">
                <option selected>Product</option>
            </select>
            <form class="d-flex" role="search" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        </div>
        <a href="index.php" class="btn btn-danger" style="margin-left: 350px;">Log out</a>
    </div>
    <div id="all_product">
        <?php
        $select_query = "select*from product";
        $result = mysqli_query($conn, $select_query);
        if ($result) {
            while ($fetch = mysqli_fetch_assoc($result)) {

        ?>
                <div>
                    <div><img src="<?php echo $fetch["Image"] ?>" alt="" height="300px" width="230px"></div>
                    <div><?php echo $fetch["product_name"] ?></div>
                    <div><?php echo $fetch["product_brand"] ?></div>
                </div>
        <?php
            }
        }
        ?>

    </div>
</body>

</html>