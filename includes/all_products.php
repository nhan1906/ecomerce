<?php
$query_products = "SELECT * FROM product";
$products = $connect->query($query_products);
?>

<div class="container text-center" style="background-color: white;">
  <div class="row">
    <?php while($product = mysqli_fetch_assoc($products)) :
          include 'includes/product_item.php';
          endwhile; ?>
  </div>
</div>