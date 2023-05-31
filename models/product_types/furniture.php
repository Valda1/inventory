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

    /*public function __construct(){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
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

    public function setProduct($furniture){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, height_cm, length_cm, width_cm) VALUES ('".$furniture->getSku()."', '".$furniture->getName()."', '".$furniture->getPrice()."', '".$furniture->getProductType()."', '".$furniture->getHeight()."', , '".$furniture->getlength()."', , '".$furniture->getWidth()."')";
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }  
    }

}

    /*public function setProduct($sku, $name, $price, $productType, $height = null, $length = null, $width = null){
        $DB = new Database();
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, height_cm, length_cm, width_cm) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $height, $length, $width]);
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }*/