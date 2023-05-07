<?php

//namespace task\models;

//use app\core\Database;

abstract class Product {
    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    //public string $data;
    public array $data = ['size', 'weight', 'width', 'lenght', 'height'];
    //$attributes = array();
    //public array $validTypes = ['DVD', 'Furniture', 'Book'];
    public int $size; //for DVD
    public int $height; //for furniture
    public int $width; //for furniture
    public int $lenght; //for furniture
    public int $weight; //for book

    //public string $value;
    //public static array $validTypes = ['DVD', 'Book', 'Furniture'];
    //public array $data;

    public function __construct($sku, $name, $price, $productType, $data){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->data = $data;
        //$this->size = $size;
        //$this->weight = $weight;
    }

    abstract public function createProduct($sku, $name, $price, $productType, $data);

    abstract public function deleteProduct($sku);


}