<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <!--jquery cdn link-->
    <script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>
    <!--javasript link-->
    <script src="script.js" defer></script>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--vue.js link-->
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
     <!--css link-->
     <link rel="stylesheet" href="style.css">
     <!--ajax link-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>
<body>

<div class="container-fluid p-0">
    <nav class="navbar bg-info navbar-expand-lg">
        <div class="container-fluid justify-content-start">
          <h5 class="navbar-text fw-bold">Product Add</h5>
        </div>
        <div class="container-fluid justify-content-end">
          <form>
          <button id="save-product-btn" class="btn btn-success me-2 space-between" type="submit" name="save">Save</button>
          </form>
          <button id="cancel-btn" class="btn btn-success me-2" type="button">Cancel</button>
        </div>
      </nav>
</div>

<div class="container mt-4">
<form id="product-form" action="code_for_adding.php" method="post">
  <fieldset>
      <div class="row mb-3 g-3 align-items-center">
        <!--<div class="input-group mb-3">-->
          <div class="col-sm-2 col-lg-1">
              <label for="sku" class="col-form-label">SKU</label>
              <!--<span class="input-group-text" id="sku">SKU</span>-->
          </div>

          <div class="col-sm-auto position-relative">
              <!--<input required type="text" id="sku" name="sku" class="form-control" value="<?= $product->data['sku'] ?? '' ?>">-->
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="sku">
          </div>
      </div>



      <div class="row mb-3 g-3 align-items-center">
        <div class="col-sm-2 col-lg-1">
          <label for="name" class="col-form-label">Name</label>
        </div>
        <!--<span class="input-group-text" id="name">Name</span>-->
        <div class="col-sm-auto position-relative">
          <input type="text" class="form-control" aria-describedby="basic-addon1" name="name">
        </div>
      </div>

      <div class="row mb-3 g-3 align-items-center">
        <div class="col-sm-2 col-lg-1">
          <label for="price" class="col-form-label">Price ($)</label>
        </div>
        <!--<span class="input-group-text" id="price">Price ($)</span>-->
        <div class="col-sm-auto position-relative">
          <input type="text" class="form-control" aria-describedby="basic-addon1" name="price">
        </div>
      </div>
  </fieldset>


  <div class="row mb-5 g-3 align-items-center">
    <div class="col-sm-2 col-lg-1">
      <!--<div class="form-group">-->
        <label for="type">Type Switcher</label>
        <!--<label for="productType">Product Type</label>-->
    </div>   
    <div class="col-sm-auto"> 
        <select class="form-control form-select type" id="type" name="type" required><!-- do i need form control-->
          <option value="0">Type Switcher</option>
          <option value="1">DVD-disc</option>
          <option value="2">Book</option>
          <option value="3">Furniture</option>
        </select>
    </div>    
      </div>
  </div>

      <div class="input-group mb-3 myDiv" id="showDVD">
        <span class="input-group-text" id="size">Size (MB)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="size">
      </div>

      <div class="input-group mb-3 myDiv" id="showFurniture">
        <span class="input-group-text" id="height">Height (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="height">
        <span class="input-group-text" id="width">Width (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="width">
        <span class="input-group-text" id="lenght">Lenght (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="length">
      </div>

      <div class="input-group mb-3 myDiv" id="showBook">
        <span class="input-group-text" id="weight">Weight (KG)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="weight">
      </div>
      
</form>

<?php

        if(!isset($_GET['save'])){
          exit();
        }else{
          $save = $_GET['save'];

          if($save == "empty"){
            echo "<p class='error'>You have to fill in all the fields!</p>";
            exit();
          }elseif($save == "char"){
            echo "<p class='error'>Incorrect input!</p>";
            exit();
          }elseif($save == "success"){
            echo "<p class='error'>Your have added new product successfully!</p>";
            exit();
          }
        }

        ?>
</div>

<footer class="fixed-bottom">
        <div class="mx-5 py-3 text-center border-top border-2 border-primary">
            Scandiweb Test assignment
        </div>
</footer>


    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>