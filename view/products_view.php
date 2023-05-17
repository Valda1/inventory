<?php

require_once 'database/database.php';
require_once 'controllers/product_controller.php';

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


        foreach($products as $product) {
            
                echo $product['sku']  . '<br>';
                echo $product['name']  . '<br>';
                echo $product['price']  . '<br>';


        }
    

}

}