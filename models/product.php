<?php

abstract class Product{
    protected string $sku;
    protected string $name;
    protected float $price;
    protected string $productType;

    protected function __construct($sku, $name, $price, $productType){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
    }

    abstract protected function setProduct($sku, $name, $price, $productType);

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


}