<?php

//require_once 'database/database.php';
require_once '../models/product.php';

class Book extends Product{

    protected string $sku;
    protected string $name;
    protected float $price;
    protected string $productType;
    protected int $weight;

   /*public function __construct($sku, $name, $price, $productType, $weight){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->weight = $weight;
    }*/

    /*public function buildObject(){
        $book = new Book;
        $book->sku = $sku;
        $book->name = $name;
        $book->price = $price;
        $book->productType = $productType;
        $book->weight = $weight;
        return $book;

    }*/

    /*public function __set($sku, $value){
        $this->sku = $value;
    }

    public function __get($sku){
        return $this->$sku;
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

    //public function setProduct($sku, $name, $price, $productType, $weight = null){
    public function setProduct($book){
        $DB = new Database();
        try{
            //$query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES (:sku, :name, :price, :productType, :weight)";
            //$query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES ('{$book->getSku()}', '{$book->getName()}', '{$book->getPrice()}', '{$book->getProductType()}', '{$book->getWeight()})";
            $query = "INSERT INTO products (sku, name, price, product_type, weight_kg) VALUES ('".$book->getSku()."', '".$book->getName()."', '".$book->getPrice()."', '".$book->getProductType()."', '".$book->getWeight()."')";
            $stmt = $DB->connect()->prepare($query);
            //$stmt->execute([$sku, $name, $price, $productType, $weight]);
            /*$stmt->bindParam(':sku', $book['sku']);
            $stmt->bindParam(':name', $book['name']);
            $stmt->bindParam(':price', $book['price']);
            $stmt->bindParam(':productType', $book['productType']);
            $stmt->bindParam(':weight', $book['weight']);*/
            $stmt->execute();
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

        

    }