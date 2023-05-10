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