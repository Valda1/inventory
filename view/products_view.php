<?php

class ProductsView extends Products{

    public function showProduct($sku){
        $results = $this->getProduct($sku);
        echo $results['sku'];
        echo $results['name'];
        echo $results['price'];
    }

    public function showAllProducts(){
        $products = $this->getAllProducts();

        foreach($products as $product) {
            
                echo $product['sku']  . '<br>';
                echo $product['name']  . '<br>';
                echo $product['price']  . '<br>';


        }
    

}

}