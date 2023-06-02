<?php

abstract class Product{
    private string $sku;
    private string $name;
    private float $price;
    private string $productType;

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


}