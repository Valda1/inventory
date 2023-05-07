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
        $size = $_POST["data"]["size"];
        $weight = $_POST["weight"];

        echo $size;

        /*$errorEmpty = "Please, submit required data!";
        $errorName = "Please, provide the data of indicated type!";
        $errorPrice = "Please, provide the data of indicated type!";
        //$errors = array();

        if(empty($sku) || empty($name) || empty($price) || empty($productType) || empty($data)){
            $_SESSION["error"] = $errorEmpty;
            header("location: add.php");
            //exit();
        }elseif(!preg_match("/^[a-zA-Z]*$/", $name)){
            $_SESSION["error"] = $errorName;
            header("location: add.php");
            //exit();
        }elseif(!is_numeric($price)){
            $_SESSION["error"] = $errorPrice;
            header("location: add.php");
            //exit();
        }else{
            $add = new ProductController();
            $add->createProduct($sku, $name, $price, $productType, $size, $weight);
            header("location: index.php");
        }*/

        

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












