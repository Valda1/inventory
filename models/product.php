<?php

abstract class Product{
    private string $sku;
    private string $name;
    private float $price;
    private string $productType;
    private int $size;
    private int $weight;
    private int $height;
    private int $length;
    private int $width;

    abstract public function setProduct($product);

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

    public function getSize() {
        return $this->size;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

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

    public function setSize($size) { 
        $this->size = $size; 
    }

    public function setWeight($weight) { 
        $this->weight = $weight; 
    }

    public function setHeight($height) { 
        $this->height = $height; 
    }

    public function setLength($length) { 
        $this->length = $length; 
    }

    public function setWidth($width) { 
        $this->width = $width; 
    }


}