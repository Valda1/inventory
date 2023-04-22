<?php
  include 'database/database.php';
  //include_once 'products/product_controller.php';
  //require 'database/database.php';
  //$query = "SELECT * FROM products";
  //$result = mysqli_query($connection, $query);
  include 'models/product.php';
  include 'models/products.php';
  include 'controllers/product_controller.php';
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Page</title>
    <!--css file-->
    <link rel="stylesheet" href="style.css">
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar bg-info navbar-expand-lg"> <!--bg-body-tertiary MAYBE NEED TO ADD-->
            <div class="container-fluid justify-content-start">
              <h5 class="navbar-text fw-bold">Product List</h5>
              <button><a href="index.php?add_product" id="add-product-btn" class="btn btn-outline-success me-2" type="button">ADD</a></button>
              <button id="delete-product-btn" class="btn btn-outline-success me-2" type="button">MASS DELETE</button>
            </div>
          </nav>

        <hr>

     <div class="col-md-3">
                <div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1">
                    </div>

                    <div class="card-body text-center">
                    <!--  <?php
                      foreach($results as $row){
                        echo '
                          <h5 class="card-title">'.$row['sku'].'</h5>
                          <h6 class="card-text">'.$row['name'].'</h6>
                          <h6 class="card-text">'.$row['price'].'</h6>';
                      }

                      ?>-->
                      <?php
                      $products = new Products();
                      $products->getAllProducts();

                      ?>
                      <!--<h5 class="card-title"><?= $row['sku'] ?></h5>
                      <h6 class="card-text"><?= $row['name'] ?></h6>
                      <h6 class="card-text"><?= $row['price'] ?></h6>
                      <h6 class="card-text">Size: 700 MB</h6>-->
                    </div>
                  </div>
            </div>
  
<!-- HIS EXAMPLE
<div class="container my-5">
    <div class="row g-4">
        <?php foreach ($results as $row => $product) : ?>
            <div class="col-6 col-md-3">
                <div class="card border-primary">
                    <div class="card-body">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input form="delete-form" type="checkbox" class="delete-checkbox form-check-input" name="<?= $product['sku'] ?>">
                            </label>
                        </div>
                        <p class="card-title text-center"><?= $product['sku'] ?></p>
                        <p class="card-text text-center"><?= $product['name'] ?></p>
                        <p class="card-text text-center"><?= $product['price'] ?> $</p>
                       <p class="card-text text-center"><?= $product['value'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div> HIS EXAMPLE ENDS HERE -->


        <!--second child-->
        <!--first row of products-->
       <!-- <div class="row">
            <div class="col-md-3">
                <div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1"> MAYBE NEED TO ADD VALUE AND CHECKED
                    </div>

                    <div class="card-body text-center" action="" method="GET">
                      <h5 class="card-title"></h5>
                      <h6 class="card-text"></h6>
                      <h6 class="card-text">Size: 700 MB</h6>
                    </div>
                  </div>
            </div>

            <div class="col-md-3">
                <div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1">
                    </div>

                    <div class="card-body text-center">
                      <h5 class="card-title">JVC200123</h5>
                      <h6 class="card-text">Acme DISC</h6>
                      <h6 class="card-text">1.00 $</h6>
                      <h6 class="card-text">Size: 700 MB</h6>
                    </div>
                  </div>
            </div>  
            
            <div class="col-md-3">
                <div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1">
                    </div>

                    <div class="card-body text-center">
                      <h5 class="card-title">JVC200123</h5>
                      <h6 class="card-text">Acme DISC</h6>
                      <h6 class="card-text">1.00 $</h6>
                      <h6 class="card-text">Size: 700 MB</h6>
                    </div>
                  </div>
            </div>

            <div class="col-md-3">
                <div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1">
                    </div>

                    <div class="card-body text-center">
                      <h5 class="card-title">JVC200123</h5>
                      <h6 class="card-text">Acme DISC</h6>
                      <h6 class="card-text">1.00 $</h6>
                      <h6 class="card-text">Size: 700 MB</h6>
                    </div>
                  </div>
            </div>

        </div>

        second row of products
        <div class="row">

        </div>-->



</div>

<!--third child-->
<div class="container">
      <?php
      if(isset($_GET['add_product'])){
        include('add_product.php');
      }
      ?>
    </div>



    <!--Bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>