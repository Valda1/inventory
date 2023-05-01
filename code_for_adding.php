<?php

include 'database/database.php';
include 'models/product.php';
include 'models/products.php';
include 'controllers/product_controller.php';

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST["save"])){
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];

        if(empty($sku) || empty($name) || empty($price)){
            header("location: add.php?save=empty");
            exit();
        }else{
            //check if input characters are valid
            if(!preg_match("/^[a-zA-Z]*$/", $name) || !is_numeric($price)){
                header("location: add.php?save=char");
                exit();
            }else{
                //check sku validity in DB
                //if not valid is taken
                $duplicateSku = new Products();
                $duplicateSku->checkSkuDuplicate($sku);

                if($duplicateSku){
                    header("location: add.php?save=taken");
                    exit();
                }else{
                    $addition = new ProductController();
                    $addition->createProduct($sku, $name, $price);
                    //header("location: index.php?error=none");
                    header("location: add.php?save=success");
                    exit();
                }
            }
           
        }
    }else{
        header("location: add.php");
        exit();
    }