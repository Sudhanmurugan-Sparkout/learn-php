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
            <select class="form-select" aria-label="Default select example" id="selectbox1">
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
            <select class="form-select" aria-label="Default select example" id="selectbox2">
                <option selected>Product</option>
            </select>
        </div>

        <div id="search">
            <input class="form-control me-2" type="text" id="global-search" onkeyup="search()" placeholder="Search" name="searchdata">
        </div>


        <a href="index.php" class="btn btn-danger" id="btn">Log out</a>
    </div>
    <div class="row">
        <div class="col-md-2 border">
            <h3 class="text-center bg-info mt-3">Price Range</h3>
            
            <div class="form-check ">
                <input class="form-check-input mx-auto" type="radio" name="price" id="priceFilter" value=" 0 and 499" onclick="priceFilter()">
                <label class="form-check-label ">
                    Under $500
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input mx-auto" type="radio" name="price" id="priceFilter" value="500 and 1000" onclick="priceFilter()">
                <label class="form-check-label" >
                    $500 -$1000
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input mx-auto" type="radio" name="price" id="priceFilter" value="1000 and 5000" onclick="priceFilter()">
                <label class="form-check-label" >
                    $1000 -$5000
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input mx-auto" type="radio" name="price" id="priceFilter" value="5000 and 10000" onclick="priceFilter()">
                <label class="form-check-label" >
                    $5000 -$10000
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input mx-auto" type="radio" name="price" id="priceFilter" value="10001 and 100000" onclick="priceFilter()">
                <label class="form-check-label">
                  Over 10,000
                </label>
            </div>
            <h3 class="text-center bg-info mt-3"></h3>
        </div>
        <div class="col-md-10">
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
                            <div>$<?php echo $fetch["price"] ?></div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "searchData.php",
                data: {

                },
                dataType: "html",
                success: function(response) {
                    console.log('response', response);
                    $("#all_product").html(response);
                }
            })

            $("#selectbox1").click(function() {
                const id = $('#selectbox1').val();
                $.ajax({
                    type: "get",
                    url: "fetch_product.php",
                    data: {
                        "id": id,
                        // "type": selectedValue,
                    },
                    //enum
                    dataType: "html",
                    success: function(response) {
                        $("#selectbox2").html(response);
                    }
                });
            })

            $('#selectbox2').click(function() {
                const name = $('#selectbox2').val();
                $.ajax({
                    type: "get",
                    url: "filterProduct.php",
                    data: {
                        "name": name
                    },
                    dataType: "html",
                    success: function(response) {
                        $("#all_product").html(response);
                    }
                });
            });
           
        });

        function search() {
            const searchData = $("#global-search").val();
            var dummy = 'dummydata';

            $.ajax({
                type: "get",
                url: "searchData.php",
                data: {
                    "data": searchData,
                    "check": dummy
                },
                dataType: "html",
                success: function(response) {
                    console.log('response', response);
                    $("#all_product").html(response);
                }
            })

        }
        function priceFilter(){
            var price=$("#priceFilter:checked").val();
            //  alert(price);
            $.ajax({
                    type: "get",
                    url: "filterPrice.php",
                    data: {
                        "price":price
                    },
                    dataType: "html",
                    success: function(response) {
                        $("#all_product").html(response);
                    }
                });
        }
    </script>
</body>

</html>