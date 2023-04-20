<?php

//namespace task\models;

//use app\core\Database;

abstract class Product {
    public string $sku;
    public string $name;
    public float $price;
    public string $productType;
    public int $size; //for DVD
    public int $height; //for furniture
    public int $width; //for furniture
    public int $lenght; //for furniture
    public int $weight; //for book

    //public string $value;
    //public static array $validTypes = ['DVD', 'Book', 'Furniture'];
    //public array $data;
}