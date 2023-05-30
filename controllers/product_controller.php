<?php

require '../database/database.php';

class ProductController{

    public function validateInput($sku, $name, $price, $productType, $size, $weight, $length, $height, $width){
        $DB = new Database();
        $duplicateError = $DB->checkSkuDuplicate($sku);

        $errors = array();
        $errorEmpty = "Please, submit required data!";
        $errorSku = "This SKU already exists! Please, provide another SKU!";
        $errorChar = "Please, provide the data of indicated type!";

        if(empty(trim($sku)) || empty(trim($name)) || empty($price) || empty($productType)){
            //$errors[] = "Please, submit required data!";
            $errors[] = $errorEmpty;
        }

        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            //$errors[] = "Please, provide the data of indicated type!";
            $errors[] = $errorChar . "<br> Name must consist of letters only!";
        }

        if(!is_numeric($price)){
            //$errors[] = "Please, provide the data of indicated type!";
            $errors[] = $errorChar;
        }

        if($productType == 'DVD-disc'){
            if(empty($size)){
                //$errors[] = "Please, submit required data!";
                $errors[] = $errorEmpty . "<br> Please, provide size!";
            }elseif(!is_numeric($size)){
                //$errors[] = "Please, provide the data of indicated type!";
                $errors[] = $errorChar;
            }
        }

        if($productType == 'Book'){
            if(empty($weight)){
                //$errors[] = "Please, submit required data!";
                $errors[] = $errorEmpty . "<br> Please, provide weight!";
            }elseif(!is_numeric($weight)){
                //$errors[] = "Please, provide the data of indicated type!";
                $errors[] = $errorChar;
            }
        }

        if($productType == 'Furniture'){
            if(empty($height) || empty($length) || empty($width)){
                //$errors[] = "Please, submit required data!";
                $errors[] = $errorEmpty . "<br> Please, provide dimentions!";
            }elseif(!is_numeric($height) || !is_numeric($length) || !is_numeric($width)){
                //$errors[] = "Please, provide the data of indicated type!";
                $errors[] = $errorChar;
            }

        }

        if($duplicateError != null){
            $errors[] = "This SKU is taken! Please, choose another one!";
        }

        return $errors;
}

public function createBook($sku, $name, $price, $productType, $weight){
    //$obj = new Book($sku, $name, $price, $productType, $weight);
    $obj = new Book();
    $obj->setSKU($sku);
    $obj->setName($name);
    $obj->setPrice($price);
    $obj->setProductType($productType);
    $obj->setWeight($weight);
    //$data = json_encode($obj, JSON_FORCE_OBJECT);
    //$data = json_encode($obj);
    //print_r($obj);
    $data = (array)$obj;
    //print_r($data);
    $book = $obj->setProduct($data);
    //$book = $obj->setProduct($obj);
    //$book = $obj->setProduct($sku, $name, $price, $productType, $weight);
}

public function createDVD($sku, $name, $price, $productType, $size){
    $obj = new DVD($sku, $name, $price, $productType, $size);
    $DVD = $obj->setProduct($sku, $name, $price, $productType, $size);
}

public function createFurniture($sku, $name, $price, $productType, $height, $length, $width){
    $obj = new Furniture($sku, $name, $price, $productType, $height, $length, $width);
    $furniture = $obj->setProduct($sku, $name, $price, $productType, $height, $length, $width);
}



}