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

    /*public string $sku_error;
    public string $name_error;
    public string $price_error;*/

    //public string $value;
    //public static array $validTypes = ['DVD', 'Book', 'Furniture'];
    //public array $data;

    public function __construct($sku, $name, $price, $productType){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
    }

    abstract public function createProduct($sku, $name, $price, $productType);

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