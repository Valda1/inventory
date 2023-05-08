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

    public function makeBookObject(){
        $book = new Book();
        $book->createBook();
        return $book;
    }

    public function createDVD($sku, $name, $price, $productType, $size){
        $query = "INSERT INTO products (sku, name, price, product_type, size) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price, $productType, $size]);

    }

    public function createBook($sku, $name, $price, $productType, $weight){
        $query = "INSERT INTO products (sku, name, price, product_type, weight) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price, $productType, $weight]);
    }

    public function createFurniture($sku, $name, $price, $productType, $height, $length, $width){
        $query = "INSERT INTO products (sku, name, price, product_type, height, length, width) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku, $name, $price, $productType, $height, $length, $width]);
    }

    public function createProduct($sku, $name, $price, $productType, $size, $weight, $height, $length, $width){
        try{
            foreach($values as $key => $value){
                if($value == null){
                    $values[$key] = "NULL";
                }

            }


            //$query = "INSERT INTO products (sku, name, price, product_type, size, weight, height, length, width) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = "INSERT INTO TABLE (products) VALUES (".$values['sku'].", ".$values['name'].", ".$values['price'].", ".$values['size'].",
            ".$values['weight'].", ".$values['height'].", ".$values['length'].", ".$values['width'].") ";

            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku, $name, $price, $productType, $size, $weight, $height, $length, $width]);

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

        }