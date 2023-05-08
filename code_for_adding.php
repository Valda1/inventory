<?php

session_start();

include 'database/database.php';
include 'models/product.php';
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

        $errorEmpty = "Please, submit required data!";
        $errorName = "Please, provide the data of indicated type!";
        $errorPrice = "Please, provide the data of indicated type!";

        if($productType == 'DVD-disc' && empty($size)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add.php");
        }elseif($productType == 'DVD-disc' && !empty($size)){
            $add = new ProductController();
            $add->createDVD($sku, $name, $price, $productType, $size);
            header("location: index.php?error=none");
        }

        if($productType == 'Book' && empty($weight)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add.php");
        }elseif($productType == 'Book' && !empty($weight)){
            $add = new ProductController();
            $add->createBook($sku, $name, $price, $productType, $weight);
            header("location: index.php?error=none");
        }

        if($productType == 'Furniture' && empty($height) || empty($length) || empty($width)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add.php");
        }elseif($productType == 'Furniture' && !empty($height) || !empty($length) || !empty($width)){
            $add = new ProductController();
            $add->createFurniture($sku, $name, $price, $productType, $height, $length, $width);
            header("location: index.php?error=none");
        }

        

        /*if(empty($sku) || empty($name) || empty($price)){
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

                $add = new ProductController();
                $add->createProduct($sku, $name, $price);
                $add->createProduct($sku, $name, $price, $productType, $size, $weight);
                //header("location: index.php?error=none");
                //$result = $duplicateSku;
                /*if($result > 0){
                    echo "there is a duplicate";
                }else{
                    echo "no duplicate";
                }*/

                /*if($duplicateSku->rowcount() > 0){
                    //echo $duplicateSku;
                    header("location: add.php?save=taken");
                    exit();*/
                /*}else{
                    $addition = new ProductController();
                    $addition->createProduct($sku, $name, $price);
                    
                    //header("location: index.php?error=none");
                    header("location: add.php?save=success");
                    exit();
                }*/
           // }
           
        //}
    }else{
        header("location: add.php");
        exit();
    }












