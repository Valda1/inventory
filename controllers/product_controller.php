<?php

//include 'database/database.php';
//include 'models/product.php';
//use task\database\database;

class ProductController extends Database{

    public function getProduct($sku){
        $query = "SELECT * FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function createProduct($sku, $name, $price, $productType, $data){
        try{
            $query = "INSERT INTO products (sku, name, price, product_type, data) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $data]);

        }catch(PDOException $e){
            if($e->errorInfo[1] == 1062){
                //$error = "<span class='text-danger'>This sku is already taken!</span>";
                echo "<div class='alert alert-warning'>This sku is already taken!</div>";
            }  
    }
}

    public function deleteProduct($sku){
        $query = "DELETE FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);
    }

    public function checkSkuDuplicate($sku){
        //try{
            $query = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);
            $count = $stmt->rowCount();
            return $count;
            //if($count > 0){
            //$error = "<span>This sku number has already been taken!</span>";
        

            /*}catch(PDOException $e){
                if($e->errorInfo[1] == 1062){
                    echo "<div class='alert alert-warning'>This sku is already taken!</div>";
                }*/
        }
    
        
    




    /*public function createProduct($sku, $name, $price){
        $this->setProduct($sku, $name, $price);
    }

    public function deleteProduct($sku){
        $this->removeProduct($sku);
    }*/


    }