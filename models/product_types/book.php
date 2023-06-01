<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class Book extends Product{

    protected string $sku;
    protected string $name;
    protected float $price;
    protected string $productType;
    protected int $weight;


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

    public function getWeight() {
        return $this->weight;
    }

    public function setProduct($book = null){
        $DB = new Database();
        try{
            //$query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES (:sku, :name, :price, :productType, :weight)";
            //$query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES ('{$book->getSku()}', '{$book->getName()}', '{$book->getPrice()}', '{$book->getProductType()}', '{$book->getWeight()})";
            
            //WORKS
            //$query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES ('".$book->getSku()."', '".$book->getName()."', '".$book->getPrice()."', '".$book->getProductType()."', '".$book->getWeight()."')";
            
            $query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES (?, ?, ?, ?, ?)";
            $stmt = $DB->connect()->prepare($query);
            $stmt->bindValue(1, $book->getSku());
            $stmt->bindValue(2, $book->getName());
            $stmt->bindValue(3, $book->getPrice());
            $stmt->bindValue(4, $book->getProductType());
            $stmt->bindValue(5, $book->getWeight());
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

        

    }