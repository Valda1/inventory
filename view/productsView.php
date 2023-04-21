<?php

//view shows info to user on the website

class ProductsView extends Products{

    public function showProduct($sku){
        $results = $this->getProduct($sku);
        echo $sku;
    }
}