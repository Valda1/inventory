<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class Furniture extends Product{

    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $height;
    public int $length;
    public int $width;

    public function __construct($sku, $name, $price, $productType, $height, $length, $width){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    public function setSku($sku) { 
        $this->sku = $sku; 
    }

    public function setName($name) { 
        $this->name = $name; 
    }

    public function setPrice($price) { 
        $this->price = $price; 
    }

    public function setPorductType($productType) { 
        $this->productType = $productType; 
    }

    public function setHeight($height) { 
        $this->height = $height; 
    }

    public function setLength($length) { 
        $this->length = $length; 
    }

    public function setWidth($width) { 
        $this->height = $width; 
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

    public function getHeight() {
        return $this->height;
    }

    public function getlength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setProduct($sku, $name, $price, $productType, $height = null, $length = null, $width = null){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, height_cm, length_cm, width_cm) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $height, $length, $width]);
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }
    
}