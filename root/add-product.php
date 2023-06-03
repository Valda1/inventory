<?php
  require 'controllers/product_controller.php';
?>

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
    <!--ajax link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--javasript link-->
    <script src="script.js" defer></script>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--css link-->
     <link rel="stylesheet" href="../styles/style.css">
     <!--favicon-->
     <link rel="icon" type="image/x-icon" href="../styles/img/favicon.ico">

</head>
<body>

<header>
<div class="container-fluid p-0">
    <nav class="navbar bg-info navbar-expand-lg">
        <div class="container-fluid justify-content-start">
          <h5 class="navbar-text fw-bold">Product Add</h5>
        </div>
        <div class="container-fluid justify-content-end">
          <form>
          <button id="saveBtn" form="product_form" class="btn btn-success me-2 space-between" type="submit" name="save">Save</button>
          </form>
          <button id="cancelBtn" class="btn btn-success me-2" type="button">Cancel</button>
        </div>
      </nav>
</div>
</header>

<div class="container mt-4">
<form id="product_form" action="product_submission.php" method="post">

<div class="d-flex flex-row">
  <i id="icon" class="fa fa-exclamation-circle" hidden></i>
  <div id="error-msg" class="col-sm-3 text-center error fw-bold rounded mb-4"></div>
</div>
 

  <fieldset>
      <div class="d-flex flex-row">
      <!--<div class="row mb-3 g-3 align-items-center">-->
          <div class="col-sm-2 col-lg-1">
              <label for="sku" class="col-form-label">SKU</label>
          </div>

          <div class="col-sm-auto position-relative">
              <input id="sku" class="border border-primary rounded"  type="text" placeholder="Enter the SKU" aria-describedby="basic-addon1" name="sku">
          </div>
      </div>


      <!--<div class="d-flex flex-row">-->
      <div class="row mb-3 g-3 align-items-center">
        <div class="col-sm-2 col-lg-1">
          <label for="name" class="col-form-label">Name</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="name" class="border border-primary rounded" type="text" placeholder="Enter the name" aria-describedby="basic-addon1" name="name">
        </div>
      </div>

      <div class="row mb-3 g-3 align-items-center">
        <div class="col-sm-2 col-lg-1">
          <label for="price" class="col-form-label">Price ($)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="price" class="border border-primary rounded" type="number" min="0.01" step="0.01" placeholder="Enter the price" aria-describedby="basic-addon1" name="price">
        </div>
      </div>
  </fieldset>

  <!--<div class="row mb-5 g-3 align-items-center">-->
  <div class="d-flex flex-row mb-5 g-3"> 
    <div class="col-sm-2 col-lg-1">
        <label for="productType">Type Switcher</label>
    </div>   
    <div class="col-sm-auto"> 
        <select id="productType" class="form-select productType border border-primary rounded" name="productType">
          <option value="">Type Switcher</option>
          <option value="DVD">DVD</option>
          <option value="Book">Book</option>
          <option value="Furniture">Furniture</option>
        </select>
    </div>    
      </div>

  <div id="attributes" class="mb-5">
    <fieldset>

    <div id="DVD" class="row mb-3 g-3 align-items-center myDiv DVD">
      <div class="row mb-1">
          <legend><em>Please, provide size:</em></legend>
      </div>
        <div class="col-sm-2 col-lg-1">
          <label for="size" class="col-form-label">Size (MB)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="size" type="number" min="1" class="form-control border border-primary rounded" placeholder="Enter the size" aria-describedby="basic-addon1" name="size">
        </div>
      </div>
</fieldset>

<fieldset>

      <div id="Book" class="row mb-3 g-3 align-items-center myDiv Book">
        <div class="row mb-1">
          <legend><em>Please, provide weight:</em></legend>
        </div>
        <div class="d-flex flex-row">
        <div class="col-sm-2 col-lg-1">
          <label for="weight" class="col-form-label">Weight (KG)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="weight" type="number" min="1" class="form-control border border-primary rounded" placeholder="Enter the weight" aria-describedby="basic-addon1" name="weight">
        </div>
      </div>
</div>
</fieldset>

<fieldset>
  <div id="Furniture">

      <div class="row mb-3 g-3 align-items-center myDiv Furniture" >
        <div class="row mb-1">
          <legend><em>Please, provide dimentions:</em></legend>
        </div>
        <div class="d-flex flex-row">
        <div class="col-sm-2 col-lg-1">
          <label for="height" class="col-form-label">Height (CM)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="height" type="number" min="1" class="form-control border border-primary rounded" placeholder="Enter the height" aria-describedby="basic-addon1" name="height">
        </div>
      </div>
</div>

      <!--<div class="d-flex flex-row mb-5 g-3 myDiv Furniture" id="showFurniture">-->
      <div class="row mb-3 g-3 align-items-center myDiv Furniture">
      <div class="d-flex flex-row">
        <div class="col-sm-2 col-lg-1">
          <label for="width" class="col-form-label">Width (CM)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="width" type="number" min="1" class="form-control border border-primary rounded" placeholder="Enter the width" aria-describedby="basic-addon1" name="width">
        </div>
      </div>
</div>

      <div class="row mb-3 g-3 align-items-center myDiv Furniture">
      <div class="d-flex flex-row">
        <div class="col-sm-2 col-lg-1">
          <label for="length" class="col-form-label">Length (CM)</label>
        </div>
        <div class="col-sm-auto position-relative">
          <input id="length" type="number" min="1" class="form-control border border-primary rounded" placeholder="Enter the length" aria-describedby="basic-addon1" name="length">
        </div>
      </div>
</div>
</div>

</fieldset>
 
  </div>
   
</form>

</div>

<?php
  include_once '../includes/footer.php';
?>

</body>

</html>