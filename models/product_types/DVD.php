<?php

//use \database\Database as DB;

require_once 'database/database.php';
require_once 'models/product.php';

//$DB = new Database();
//$DB->connect();

//DB\connect();



class DVD extends Product{

    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $size;

    public function __construct($sku, $name, $price, $productType, $size){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->size = $size;
    }

    public function setProduct($sku, $name, $price, $productType, $size = null){
        $DB = new Database();

        try{
            $query = "INSERT INTO products (sku, name, price, product_type, size) VALUES (?, ?, ?, ?, ?)";
            //$stmt = $this->connect()->prepare($query);
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $size]);
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

    
    
}