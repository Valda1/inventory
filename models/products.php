<?php

//According to MVC approach models deals with the DB queries

class Products extends Database{

    public function printHi(){
        $word = "Hi!";
        return $word;
    }

    protected function getProduct($sku){
        $query = "SELECT * FROM products WHERE sku = ?;";
        $stmt = $this->connect()->prepare($query);
        $stmt = execute($query);

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

        /*if($results->rowCount() > 0){
            return $results;
        }else{
            return false;
        }*/
    }

    protected function setProduct($sku, $name, $price){
        $query = "INSERT INTO products (sku, name, price) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price]);
    }


    public function deleteProduct($sku){
        $query = "DELETE FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);
    }




}