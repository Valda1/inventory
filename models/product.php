<?php

//namespace task\models;

//use app\core\Database;

//include_once 'database/database.php';

abstract class Product{
    public string $sku;
    public string $name;
    public float $price;
    public string $productType;

    public function __construct($sku, $name, $price, $productType){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
    }

    abstract public function setProduct($sku, $name, $price, $productType);


}