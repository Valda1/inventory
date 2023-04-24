<?php

include 'database/database.php';
include 'models/product.php';
include 'models/products.php';
include 'controllers/product_controller.php';

if(isset($POST['delete'])){
    /*public static function delete()
    {
        if ($_POST) {
            $db = new Database();
            foreach ($_POST as $key => $value) {
                $db->deleteProduct($key);
            }
        }
        header('Location: /');
    }*/

    /*public function deleteProduct($sku)
    {
        $statement = $this->pdo->prepare('DELETE FROM products WHERE sku = :sku');
        $statement->bindValue(':sku', $sku);

        return $statement->execute();
    }*/

    $products = $_POST[$product['sku']];

    //$query = "DELETE FROM products WHERE sku = $product['sku']";
    $stmt = connect()->prepare(query);
    $stmt = execute($query);


}