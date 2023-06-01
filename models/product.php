<?php

abstract class Product{
    protected string $sku;
    protected string $name;
    protected float $price;
    protected string $productType;

    abstract public function setProduct();

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