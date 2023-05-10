<?php

require_once 'database/database.php';

class ProductsView{

    public function showProduct($sku){
        $results = $this->getProduct($sku);
        echo $results['sku'];
        echo $results['name'];
        echo $results['price'];
    }

    public function showAllProducts(){
        $DB = new Database();
        $products = $DB->getAllProducts();


        //$products = $this->getAllProducts();

        foreach($products as $product) {
            
                echo $product['sku']  . '<br>';
                echo $product['name']  . '<br>';
                echo $product['price']  . '<br>';


        }
    

}

}