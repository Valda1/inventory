<?php

session_start();

include 'database/database.php';
include 'models/product.php';
include 'models/product_types/DVD.php';
include 'models/product_types/book.php';
include 'models/product_types/furniture.php';
include 'controllers/product_controller.php';

if(isset($_POST["save"])){

        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $productType = $_POST["type"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $length = $_POST["length"];
        $width = $_POST["width"];

        $DB = new Database();
        $duplicateError = $DB->checkSkuDuplicate($sku);

        $errorEmpty = "Please, submit required data!";
        $errorSku = "This SKU already exists! Please, provide another SKU!";
        $errorName = "Please, provide the data of indicated type!";
        $errorPrice = "Please, provide the data of indicated type!";

        if(empty($sku) || empty($name) || empty($price) || empty($productType)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add-product.php");
            //header("location: add.php?save=empty");
            exit();
        }elseif($duplicateError > 0){
            $_SESSION["error"] = $errorSku;
            header("location: add-product.php");
            exit();
        }elseif($productType == 'DVD-disc' && empty($size)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add-product.php");
            //header("location: add.php?save=empty");
            exit();
        }elseif($productType == 'DVD-disc' && !empty($size)){
            $DVD = new DVD($sku, $name, $price, $productType, $size);
            $DVD->setProduct($sku, $name, $price, $productType, $size);
            header("location: index.php?error=none");
        }elseif($productType == 'Book' && empty($weight)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add-product.php");
            //header("location: add.php?save=empty");
            exit();
        }elseif($productType == 'Book' && !empty($weight)){
            $book = new Book($sku, $name, $price, $productType, $weight);
            $book->setProduct($sku, $name, $price, $productType, $weight);
            header("location: index.php?error=none");
        }elseif($productType == 'Furniture' && empty($height) || empty($length) || empty($width)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add-product.php");
            //header("location: add.php?save=empty");
            exit();
        }elseif($productType == 'Furniture' && !empty($height) && !empty($length) && !empty($width)){
            $furniture = new Furniture($sku, $name, $price, $productType, $height, $length, $width);
            $furniture->setProduct($sku, $name, $price, $productType, $height, $length, $width);
            header("location: index.php?error=none");
        }else{
        header("location: add-product.php");
        exit();
    }
}elseif(isset($_POST["cancel"])){
    header("location: index.php");
    exit();
}
            //check if input characters are valid
            /*if(!preg_match("/^[a-zA-Z]*$/", $name) || !is_numeric($price)){
                header("location: add.php?save=char");
                exit();
            }*/







