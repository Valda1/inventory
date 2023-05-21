<?php
  session_start();
  require 'database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Prpduct List</title>
    <!--jquery cdn link-->
    <script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>
    <!--css file-->
    <link rel="stylesheet" href="styles/style.css">
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--favicon-->
     <link rel="icon" type="image/x-icon" href="styles/img/favicon.ico">
</head>

<body>
<header>

<div class="container-fluid p-0">
        <nav class="navbar bg-info navbar-expand-lg">
            <div class="container-fluid justify-content-start">
              <h5 class="navbar-text fw-bold">Product List</h5>
            </div> 
            <div class="container-fluid justify-content-end">
              <button id="add-product-btn" class="btn btn-success me-2 space-between" type="button"><a class="text-decoration-none link-light" href="/add-product">ADD</a></button>
            <form id="cards-form" action="code_for_deleting.php" method="post">
              <button id="delete-product-btn" class="btn btn-success me-2" type="submit" name="delete">MASS DELETE</button>
            </form>
            </div>
          </nav>
</div>

</header>

      <div class="container my-5">
        <form id="cards-form" action="code_for_deleting.php" method="post">
        <div class="row gy-3">
          <?php

          $DB = new Database();
          $products = $DB->getAllProducts();

          foreach($products as $product){
          ?>
          <div class="col-6 col-md-3">
            <div class="card border border-dark">
              <div class="px-3">
              <label class="form-check-label">
                <input form="cards-form" class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" name="sku[]" value="<?php echo $product['sku']; ?>">
              </label>
              </div>
                <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $product['sku']; ?></h5>
                      <h6 class="card-text"><?php echo $product['name']; ?></h6>
                      <h6 class="card-text"><?php echo number_format($product['price'], 2); ?></h6>
                      <h6 class="card-text"><?php if(!empty($product['size_mb'])){ echo "Size: " . $product['size_mb'] . "MB";}; ?></h6>
                      <h6 class="card-text"><?php if(!empty($product['weight_kg'])){ echo "Weight: " . $product['weight_kg'] . "KG";}; ?></h6>
                      <h6 class="card-text"><?php if(!empty($product['height_cm']) && !empty($product['length_cm']) && !empty($product['width_cm'])){ echo "Dimentions: " . $product['height_cm'] . "x" . $product['length_cm'] . "x" . $product['width_cm'];}; ?></h6>
                </div>
            </div>
          </div>
            <?php } ?>
        </div>
        </form>

</div>

<?php
  include_once 'includes/footer.php';
?>

</body>
</html>