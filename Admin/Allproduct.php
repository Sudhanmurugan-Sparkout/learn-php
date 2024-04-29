<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<table class="table table-hover table-striped">
            <thead class="bg-primary">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Brand</td>
                    <td>Price</td>
                    <td>Stock</td>
                    <td>category_id</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                
                $select_query= "select*from product";
                $result=mysqli_query($conn,$select_query);
                if($result){
                    while($fetch=mysqli_fetch_assoc($result)){

                   ?>
                        <tr>
                        <td><?php echo $fetch["id"]?></td> 
                    <td><?php echo $fetch["product_name"]?></td>
                    <td><?php echo $fetch["product_brand"]?></td>
                    <td><?php echo $fetch["price"]?></td>
                    <td><?php echo $fetch["stock"]?></td>
                    <td><?php echo $fetch["category_id"]?></td>
            
                </tr>
                <?php
                    }
                }
                ?>
                
                
                
            </tbody>
        </table>