<?php

//controllers are used to update info in DB

//include("database\database.php");
//use task\database\database;

class ProductController extends Products{

    public function createProduct($sku, $name, $price){
        $this->setProduct($sku, $name, $price);
    }

    public function showProducts(){
        $this->getAllProducts();
    }


}