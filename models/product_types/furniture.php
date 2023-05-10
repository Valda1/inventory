<?php

require_once 'database/database.php';
require_once 'models/product.php';

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

    public function setProduct($sku, $name, $price, $productType, $height = null, $length = null, $width = null){
        $DB = new Database();
        $query = "INSERT INTO products (sku, name, price, product_type, height, length, width) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $DB->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price, $productType, $height, $length, $width]);
    }
    
}