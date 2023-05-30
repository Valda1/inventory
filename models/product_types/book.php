<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class Book extends Product{

    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $weight;

    /*public function __construct(){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->weight = $weight;
    }*/

    public function setSku($sku) { 
        $this->sku = $sku; 
    }

    public function setName($name) { 
        $this->name = $name; 
    }

    public function setPrice($price) { 
        $this->price = $price; 
    }

    public function setProductType($productType) { 
        $this->productType = $productType; 
    }

    public function setWeight($weight) { 
        $this->weight = $weight; 
    }

    public function get_sku() {
        return $this->sku;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getProductType() {
        return $this->productType;
    }

    public function getWeight() {
        return $this->weight;
    }

    //public function setProduct($sku, $name, $price, $productType, $weight = null){
    public function setProduct($book){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES (:sku, :name, :price, :productType, :weight)";
            $stmt = $DB->connect()->prepare($query);
            //$stmt->execute([$sku, $name, $price, $productType, $weight]);
            //$stmt->bindParam($book['sku'], $book['name'], $book['price'], $book['productType'], $book['weight']);
            $stmt->bindParam(':sku', $book['sku']);
            $stmt->bindParam(':name', $book['name']);
            $stmt->bindParam(':price', $book['price']);
            $stmt->bindParam(':productType', $book['productType']);
            $stmt->bindParam(':weight', $book['weight']);
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

    
}