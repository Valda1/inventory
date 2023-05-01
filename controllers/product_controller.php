<?php

//include 'database/database.php';
//include 'models/product.php';
//use task\database\database;

class ProductController extends Database{

    /*function __construct()
{
    parent::__construct($sku, $name, $price);
}*/

    public function getProduct($sku){
        $query = "SELECT * FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function createProduct($sku, $name, $price){
        $query = "INSERT INTO products (sku, name, price) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price]);
    }

    public function deleteProduct($sku){
        $query = "DELETE FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);
    }

    public function checkSkuDuplicate($sku){
        $query = "SELECT * FROM products WHERE sku = '$sku'";
        //$stmt = $this->connect()->prepare($query);
        //$stmt->execute();
        //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $results = mysql_query($query);

        if(mysql_num_rows($results) > 0){
            //return "This sku already exists! Enter another sku, please!";
            //echo "This sku already exists! Enter another sku, please!";
            return true;

        }else{
            return false;
    }


    /*public function createProduct($sku, $name, $price){
        $this->setProduct($sku, $name, $price);
    }

    public function deleteProduct($sku){
        $this->removeProduct($sku);
    }*/


    }
}