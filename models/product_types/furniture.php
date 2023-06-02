<?php

//require_once '../database/database.php';
//require_once '../models/product.php';

class Furniture extends Product{

    private string $sku;
    private string $name;
    private float $price;
    private string $productType;
    private int $height;
    private int $length;
    private int $width;


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

    public function setHeight($height) { 
        $this->height = $height; 
    }

    public function setLength($length) { 
        $this->length = $length; 
    }

    public function setWidth($width) { 
        $this->width = $width; 
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

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setProduct($product){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, height_cm, length_cm, width_cm) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->bindValue(1, $product->getSku());
            $stmt->bindValue(2, $product->getName());
            $stmt->bindValue(3, $product->getPrice());
            $stmt->bindValue(4, $product->getProductType());
            $stmt->bindValue(5, $product->getHeight());
            $stmt->bindValue(6, $product->getLength());
            $stmt->bindValue(7, $product->getWidth());
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }  
    }

}