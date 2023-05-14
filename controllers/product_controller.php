<?php

//include 'database/database.php';
//include 'models/product.php';
//use task\database\database;
require_once 'database/database.php';
require_once 'models/product.php';

require_once 'models/product_types/DVD.php';
require_once 'models/product_types/book.php';
require_once 'models/product_types/furniture.php';

class ProductController{

    public function validateInput(){
        $errors;
        $errorEmpty = "Please, submit required data!";
        $errorSku = "This SKU already exists! Please, provide another SKU!";
        $errorChar = "Please, provide the data of indicated type!";

        if(empty($sku) || empty($name) || empty($price) || empty($productType)){
            $errors[] = $errorEmpty;  
            return $errors;
            //return false;
        }elseif($duplicateError > 0){
            $errors[] = $errorSku;
            return $errors;
        }elseif(!preg_match("/^[a-zA-Z]*$/", $name) || !is_numeric($price) || !is_numeric($size) ||
                !is_numeric($weight) || !is_numeric($height) || !is_numeric($length) || !is_numeric($width)){
            $errors[] = $errorChar;
            return $errors;
            //return false;
        }elseif($productType == 'DVD-disc' && empty($size)){
            $errors[] = $errorEmpty;
            return $errors;
            //return false;
        }elseif($productType == 'Book' && empty($weight)){
            $errors[] = $errorEmpty;
            return $errors;
            //return false;
        }elseif($productType == 'Furniture' && empty($height) || empty($length) || empty($width)){
            $errors[] = $errorEmpty;
            return $errors;
            //return false;
        }
}

    public function createDVD(){
        $DVD = new DVD(null, null, null, null, null);
        $DVD->setProduct($sku, $name, $price, $productType, $size);

    }

    public function createBook(){
        $book = new Book();
        $book->setProduct($sku, $name, $price, $productType, $weight);

    }

    public function createFurniture(){
        $furniture = new Furniture();
        $furniture->setProduct($sku, $name, $price, $productType, $height, $length, $width);

    }

    

    public function checkSkuDuplicate($sku){
        //try{
            $query = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);
            $count = $stmt->rowCount();
            return $count;
            //if($count > 0){
            //$error = "<span>This sku number has already been taken!</span>";
        

            /*}catch(PDOException $e){
                if($e->errorInfo[1] == 1062){
                    echo "<div class='alert alert-warning'>This sku is already taken!</div>";
                }*/
            }

        }