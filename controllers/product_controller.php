<?php

require_once 'database/database.php';
require_once 'models/product.php';

require_once 'models/product_types/DVD.php';
require_once 'models/product_types/book.php';
require_once 'models/product_types/furniture.php';

class ProductController{

    public function validateInput($sku, $name, $price, $productType, $size, $weight, $length, $height, $width){
        $DB = new Database();
        $duplicateError = $DB->checkSkuDuplicate($sku);

        $errors = array();
        /*$errorEmpty = "Please, submit required data!";
        $errorSku = "This SKU already exists! Please, provide another SKU!";
        $errorChar = "Please, provide the data of indicated type!";*/

        if(empty(trim($sku)) || empty(trim($name)) || empty($price) || empty($productType)){
            $errors[] = "Please, submit required data!";
        }

        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $errors[] = "Please, provide the data of indicated type!";
        }

        if(!is_numeric($price)){
            $errors[] = "Please, provide the data of indicated type!";
        }

        if($productType == 'DVD-disc'){
            if(empty($size)){
                $errors[] = "Please, submit required data!";
                exit();
            }elseif(!is_numeric($size)){
                $errors[] = "Please, provide the data of indicated type!";
            }
        }

        if($productType == 'Book'){
            if(empty($weight)){
                $errors[] = "Please, submit required data!";
                exit();
            }elseif(!is_numeric($weight)){
                $errors[] = "Please, provide the data of indicated type!";
            }
        }

        if($productType == 'Furniture'){
            if(empty($height) || empty($length) || empty($width)){
                $errors[] = "Please, submit required data!";
                exit();
            }elseif(!is_numeric($height) || !is_numeric($length) || !is_numeric($width)){
                $errors[] = "Please, provide the data of indicated type!";
            }

        }

        if($duplicateError != null){
            $errors[] = "This SKU is taken! Please, choose another one!";
        }

        return $errors;
}



}