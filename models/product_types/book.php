<?php

require_once 'database/database.php';
require_once 'models/product.php';

class Book extends Product{

    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $weight;

    public function __construct($sku, $name, $price, $productType, $weight){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->weight = $weight;
    }

    public function setProduct($sku, $name, $price, $productType, $weight = null){
        $DB = new Database();
        $query = "INSERT INTO products (sku, name, price, product_type, weight) VALUES (?, ?, ?, ?, ?)";
        $stmt = $DB->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price, $productType, $weight]);
    }

    
}