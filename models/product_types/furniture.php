<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class Furniture extends Product{

    protected string $sku;
    protected string $name;
    protected float $price;
    protected string $productType;
    protected int $height;
    protected int $length;
    protected int $width;


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

    public function setProduct($furniture = null){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, height_cm, length_cm, width_cm) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->bindValue(1, $furniture->getSku());
            $stmt->bindValue(2, $furniture->getName());
            $stmt->bindValue(3, $furniture->getPrice());
            $stmt->bindValue(4, $furniture->getProductType());
            $stmt->bindValue(5, $furniture->getHeight());
            $stmt->bindValue(6, $furniture->getLength());
            $stmt->bindValue(7, $furniture->getWidth());
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }  
    }

}