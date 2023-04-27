<?php

include 'database/database.php';
include 'models/product.php';
include 'models/products.php';
include 'controllers/product_controller.php';

if(isset($_POST['delete']) && isset($_POST['sku'])){

    echo "yes";
}else{
    echo "no";
}



//if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sku'])){
    /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        var_dump($_POST); // Debugging statement
        if (isset($_POST['sku']) && is_array($_POST['sku'])) {
          foreach ($_POST['sku'] as $sku) {
            var_dump($sku); // Debugging statement
            // Do something with the $sku value
            echo "yes";
          }
        }
      }*/

    //$deletion = new ProductController();

    /*foreach($_POST["sku"] as $sku){
        echo $sku;
        //$deletion->deleteProduct($sku);
    }

    /*$all_skus = $_POST['sku']; 
    $extract_sku = implode(',', $all_skus);
    echo $extract_sku;*/


//if($_SERVER['REQUEST_METHOD'] == 'POST'){
//if(isset($_POST['delete'])){

    //$deletion = new ProductController();
    //$sku = $_POST['sku'];

    /*foreach($_POST as $key => $value){
        $deletion->deleteProduct($key);
    }*/

    //$deletion->deleteProduct($sku);

    
    //$products = $_POST[$product['sku']];

    //header("location: index.php?error=none");
//}