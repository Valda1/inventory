<?php

include 'database/database.php';
include 'models/product.php';
include 'models/products.php';
include 'controllers/product_controller.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
//if(isset($_POST["save"])){
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];

    
        $addition = new ProductController();
        $addition->createProduct($sku, $name, $price);

        header("location: index.php?error=none");
        
    }