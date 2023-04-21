<?php

//controllers are used to update info in DB

//include("database\database.php");
//use task\database\database;

class ProductController extends Products{

    public function addProduct($sku, $name, $price){
        $this->setProduct($sku, $name, $price);
    }

    /*function add_product($data){

        $sku = $data['sku'];
        $name = $data['name'];
        $price = $data['price'];
        $product_type = $data['product_type'];
        $size = $data['size'];;
        $height = $data['height'];
        $width = $data['width'];
        $lenght = $data['lenght'];
        $weight = $data['weight'];



        $query = "INSERT INTO products (sku, name, price, product_type, size, height, width, lenght, weight) values
         ('$name', '$price', '$product_type', '$size', '$height', '$width', '$lenght', '$weight')";

        $DB = new Database();
        $DB->save($query);

    }

    function get_product($data){

        $query = "SELECT FROM products WHERE sku = ?";

        $DB = new Database();
        $DB->read($query);

    }*/

}