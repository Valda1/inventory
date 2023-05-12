<?php
  session_start();

  //include 'includes/autoloader.php';
  
  include 'database/database.php';
  include 'models/product.php';
  include 'view/products_view.php';
  include 'controllers/product_controller.php';
  
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
    <link rel="stylesheet" href="style.css">
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--vue.js link-->
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
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
              <!--href="index.php?add_product" or "/add-product-->
            <form id="cards-form" action="code_for_deleting.php" method="post">
              <button id="delete-product-btn" class="btn btn-success me-2" type="submit" name="delete">MASS DELETE</button>
              <!-- add for="..."-->
            </form>
            </div>
          </nav>
</div>

</header>

      <div class="container my-5">
        <form id="cards-form" action="code_for_deleting.php" method="post">
        <div class="row gy-3">
          <?php
          //$products = new ProductsView();
          //$products->showAllProducts();
          $file = new Database();
          $products = $file->getAllProducts();
          
          //$file = new ProductsView();
          //$products = $file->showAllProducts();
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
                </div>
            </div>
          </div>
            <?php } ?>
        </div>
        </form>

</div>

<footer class="mt-auto">
        <div class="mx-5 py-3 text-center border-top border-2 border-primary">
            Scandiweb Test assignment
        </div>
</footer>



    <!--Bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>