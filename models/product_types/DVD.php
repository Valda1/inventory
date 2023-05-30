<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class DVD extends Product{

    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $size;

    /*public function __construct(){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->size = $size;
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

    public function setSize($size) { 
        $this->size = $size; 
    }

    public function getSku() {
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

    public function getSize() {
        return $this->weight;
    }

    /*public function setProduct($sku, $name, $price, $productType, $size = null){
        $DB = new Database();

        try{
            $query = "INSERT INTO products (sku, name, price, product_type, size_mb) VALUES (?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $size]);
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }*/

    public function setProduct(){
        
    }

    
    
}