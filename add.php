<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--jquery cdn link-->
    <script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>
    <!--javasript link-->
    <script src="script.js"></script>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--vue.js link-->
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>

</head>
<body>

<div class="container-fluid p-0">
    <nav class="navbar bg-body-tertiary navbar-expand-lg"> <!--bg-info MAYBE NEED TO ADD-->
        <div class="container-fluid justify-content-start">
          <span class="navbar-text">Product List</span>
          <form>
          <button id="save-product-btn" class="btn btn-outline-success me-2" type="submit" name="save">Save</button>
          </form>
          <button id="cancel-btn" class="btn btn-outline-success me-2" type="button">Cancel</button>
        </div>
      </nav>
</div>

      <hr>

<form id="product-form" action="code_for_adding.php" method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="sku">SKU</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="sku">
      </div>

      <!--MAYBE INPUT TYPE SHOULD BE SUBMIT NOT TEXT-->

      <div class="input-group mb-3">
        <span class="input-group-text" id="name">Name</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="name">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="price">Price ($)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="price">
      </div>

      <div class="form-group">
        <label for="type">Type Switcher</label>
        <select class="form-control" id="type" name="type" required>
          <option value="0">Type Switcher</option>
          <option value="1">DVD-disc</option>
          <option value="2">Book</option>
          <option value="3">Furniture</option>
        </select>
      </div>

      <div class="input-group mb-3" id="DVD" hidden>
        <span class="input-group-text" id="size">Size (MB)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="size">
      </div>

      <div class="input-group mb-3" id="Furniture" hidden>
        <span class="input-group-text" id="height">Height (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="height">
        <span class="input-group-text" id="width">Width (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="width">
        <span class="input-group-text" id="lenght">Lenght (CM)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="length">
      </div>

      <div class="input-group mb-3" id="Book" hidden>
        <span class="input-group-text" id="weight">Weight (KG)</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="weight">
      </div>
      
</form>


    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>