<?Php
include_once 'database.php';
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  // setcookie("")

  $product = "Select*from product where category_id=$id";
  $product_result = mysqli_query($conn, $product);
  if ($product_result) {
    while ($fetch_product = mysqli_fetch_assoc($product_result)) {

?>
      <option value="<?php echo $fetch_product["product_name"] ?>"> <?php echo $fetch_product["product_name"] ?></option>

<?php
    }
  }
}
?>