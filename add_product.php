<div class="container-fluid p-0">
    <nav class="navbar bg-body-tertiary navbar-expand-lg"> <!--bg-info MAYBE NEED TO ADD-->
        <div class="container-fluid justify-content-start">
          <span class="navbar-text">Product List</span>
          <button id="save-product-btn" class="btn btn-outline-success me-2" type="button">Save</button>
          <button id="cancel-btn" class="btn btn-outline-success me-2" type="button">Cancel</button>
        </div>
      </nav>
</div>

      <hr>

<form id="product-form" action="products/product_controller.php" method="post">
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
      
</form>