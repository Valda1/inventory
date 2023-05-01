<?php

//namespace task\models;

//use app\core\Database;

abstract class Product {
    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public string $attributes;
    public array $validTypes = ['DVD', 'Furniture', 'Book'];
    public int $size; //for DVD
    public int $height; //for furniture
    public int $width; //for furniture
    public int $lenght; //for furniture
    public int $weight; //for book

    //public string $value;
    //public static array $validTypes = ['DVD', 'Book', 'Furniture'];
    //public array $data;

    public function __construct($sku, $name, $price){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function createProduct($sku, $name, $price);

    abstract public function deleteProduct($sku);
    



    /*private function emptyInput(){
        $result;
        if(empty($this->sku || empty($this->name || empty($this->price)))){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }*/


}