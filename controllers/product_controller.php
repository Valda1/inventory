<?php

//In MVC model controllers are used to update info in the DB

//include 'database/database.php';
//include 'models/product.php';
//use task\database\database;

class ProductController extends Products{

    public function createProduct($sku, $name, $price){
        $this->setProduct($sku, $name, $price);
    }


}