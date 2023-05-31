<?php

include '../models/product_types/DVD.php';
include '../models/product_types/book.php';
include '../models/product_types/furniture.php';
require '../controllers/product_controller.php';

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
            exit();
        }elseif(empty($error)){
            if($productType == 'DVD-disc'){
                $PC = new ProductController();
                $DVD = $PC->createDVD($sku, $name, $price, $productType, $size);
                exit();
            }elseif($productType == 'Book'){
                $PC = new ProductController();
                $book = $PC->createBook($sku, $name, $price, $productType, $weight);
                exit();
            }elseif($productType == 'Furniture'){
                $PC = new ProductController();
                $furniture = $PC->createFurniture($sku, $name, $price, $productType, $height, $length, $width);
                /*$furniture = new Furniture();
                $furniture->setSKU($_POST['sku']);
                $furniture->setName($_POST['name']);
                $furniture->setPrice($_POST['price']);
                $furniture->setProductType($_POST['productType']);
                $furniture->setHeight($_POST['height']);
                $furniture->setLength($_POST['length']);
                $furniture->setWidth($_POST['width']);*/
                exit();
            }


        }

}else{
    header("location: index.php");
    exit();
}








