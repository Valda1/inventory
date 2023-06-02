<?php

require '../database/database.php';
require '../models/product_types/DVD.php';
require '../models/product_types/book.php';
require '../models/product_types/furniture.php';

class ProductController{

    public function validateInput($sku, $name, $price, $productType, $size, $weight, $length, $height, $width){
        $DB = new Database();
        $duplicateError = $DB->checkSkuDuplicate($sku);

        $errors = array();
        $errorEmpty = "Please, submit required data!";
        $errorSku = "This SKU already exists! Please, provide another SKU!";
        $errorChar = "Please, provide the data of indicated type!";

        if(empty(trim($sku)) || empty(trim($name)) || empty($price) || empty($productType)){
            $errors[] = $errorEmpty;
        }

        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $errors[] = $errorChar . "<br> Name must consist of letters only!";
        }

        if(!is_numeric($price)){
            $errors[] = $errorChar;
        }

        if($productType == 'DVD-disc'){
            if(empty($size)){
                $errors[] = $errorEmpty . "<br> Please, provide size!";
            }elseif(!is_numeric($size)){
                $errors[] = $errorChar;
            }
        }

        if($productType == 'Book'){
            if(empty($weight)){
                $errors[] = $errorEmpty . "<br> Please, provide weight!";
            }elseif(!is_numeric($weight)){
                $errors[] = $errorChar;
            }
        }

        if($productType == 'Furniture'){
            if(empty($height) || empty($length) || empty($width)){
                $errors[] = $errorEmpty . "<br> Please, provide dimentions!";
            }elseif(!is_numeric($height) || !is_numeric($length) || !is_numeric($width)){
                $errors[] = $errorChar;
            }

        }

        if($duplicateError != null){
            $errors[] = "This SKU is taken! Please, choose another one!";
        }

        return $errors;
}

public function createBook($sku, $name, $price, $productType, $weight){
    $book = new Book();
    $book->setSKU($sku);
    $book->setName($name);
    $book->setPrice($price);
    $book->setProductType($productType);
    $book->setWeight($weight);

    $product = $book->setProduct($book);
    return $product;
}

public function createDVD($sku, $name, $price, $productType, $size){
    $DVD = new DVD();
    $DVD->setSKU($sku);
    $DVD->setName($name);
    $DVD->setPrice($price);
    $DVD->setProductType($productType);
    $DVD->setSize($size);

    $product = $DVD->setProduct($DVD);
    return $product;
}

public function createFurniture($sku, $name, $price, $productType, $height, $length, $width){
    $furniture = new Furniture();
    $furniture->setSKU($sku);
    $furniture->setName($name);
    $furniture->setPrice($price);
    $furniture->setProductType($productType);
    $furniture->setHeight($height);
    $furniture->setLength($length);
    $furniture->setWidth($width);

    $product = $furniture->setProduct($furniture);
    return $product;
}

}