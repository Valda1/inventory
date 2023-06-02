<?php

//require_once '../database/database.php';
require_once '../models/product.php';

class DVD extends Product{

    private string $sku;
    private string $name;
    private float $price;
    private string $productType;
    private int $size;


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
        return $this->size;
    }

    public function setProduct($product){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, size_mb) VALUES (?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->bindValue(1, $product->getSku());
            $stmt->bindValue(2, $product->getName());
            $stmt->bindValue(3, $product->getPrice());
            $stmt->bindValue(4, $product->getProductType());
            $stmt->bindValue(5, $product->getSize());
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }  
    }
}
