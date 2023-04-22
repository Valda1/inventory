<?php

class Products extends Database{

    //model deals only with database conections and queries
    //create different methods for different queries

    protected function getProduct($sku){
        $query = "SELECT * FROM products WHERE products_sku = ?;";
        $stmt = $this->connect()->prepare($query);
        $stmt = execute($query);

        $results = $stmt->fetchAll();
        return $results;
    }

    /*public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->query($query);
        while($row = $stmt->fetch()){
            echo $row['products_name'] . '<br>';
        }
    }*/

    public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$results = $stmt->fetchAll();
        return $results;

        foreach($results as $row){
            echo $results['sku'] . '<br>';
            echo $results['name'] . '<br>';
            echo $results['price'] . '<br>';
        }
    }

    protected function setProduct($sku, $name, $price){
        $query = "INSERT INTO products (sku, name, price) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price]);
    }

    public function setAllProductsStmt($sku){
        $query = "INSERT INTO products (sku, name, price) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price]);
        
    }

    public function deleteProduct($sku){
        $query = "DELETE FROM products WHERE products_sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);
    }

    /*protected function getProduct($sku){

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

    }*/
}