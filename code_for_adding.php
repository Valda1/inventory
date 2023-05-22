<?php

session_start();

include 'models/product_types/DVD.php';
include 'models/product_types/book.php';
include 'models/product_types/furniture.php';
require 'controllers/product_controller.php';

if(isset($_POST["save"])){

        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $productType = $_POST["productType"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $length = $_POST["length"];
        $width = $_POST["width"];

        $PC = new ProductController();
        $error = $PC->validateInput($sku, $name, $price, $productType, $size, $weight, $length, $height, $width);

        if(!empty($error)){
            foreach($error as $e){
                echo "<span class='error'>" . $e . "</span> <br>";
            }
            //$_SESSION["error"] = $error;
            //header("location: add-product.php");
            exit();
        }elseif(empty($error)){
            if($productType == 'DVD-disc'){
                $PC = new ProductController();
                $DVD = $PC->createDVD($sku, $name, $price, $productType, $size);
                header("location: index.php?error=none");
                exit();
            }elseif($productType == 'Book'){
                $PC = new ProductController();
                $book = $PC->createBook($sku, $name, $price, $productType, $weight);
                //header("location: index.php?error=none");
                exit();
            }elseif($productType == 'Furniture'){
                $PC = new ProductController();
                $furniture = $PC->createFurniture($sku, $name, $price, $productType, $height, $length, $width);
                //header("location: index.php?error=none");
                exit();
            }
        }

}elseif(isset($_POST["cancel"])){
    header("location: index.php");
    exit();
}








