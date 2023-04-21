<?php

class Products extends Database{

    //model deals only with database conections and queries
    //create different methods for different queries

    protected function getProduct($sku){

        $query = "SELECT * FROM products WHERE sku = ?;";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);

        $result = $stmt->fetchAll();
        return $result;
    }

    function getAllProducts(){

        $query = "SELECT * FROM products";
        $result = $this->connect()->query($query);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    protected function setProduct($sku, $name, $price){

        $query = "INSERT INTO products VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price]);

    }
}