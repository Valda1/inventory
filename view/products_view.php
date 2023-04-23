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

        foreach($products as $i => $product) : {
            
                /*echo $product['sku']  . '<br>';
                echo $product['name']  . '<br>';
                echo $product['price']  . '<br>';*/

                echo '<div class="card border border-dark" style="width: 18rem;">
                    <div>
                        <input class="delete-chechbox form-check-input border border-dark mt-3" type="checkbox" id="check1">
                    </div>

                    <div class="card-body text-center">';
                    echo '<h5 class="card-title">' .  $product['sku'] . '</h5>';
                    echo '<h6 class="card-title">' . $product['name'] . '</h6>';
                    echo '<h6 class="card-title">' . $product['price'] . '</h6>';
                    '</div>

                    </div>';

        }
    endforeach;

}

}