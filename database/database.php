<?php

class Database{

    private PDO $connect;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "store";

    public function connect(){
        try{
            $connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;

        }catch(PDOException $exception){
            $exception->getMessage();
            die();
        }
    }

    public function getProduct($sku){
        try{
            $query = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;

        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

    public function getAllProducts(){
        try{
            $query = "SELECT * FROM products ORDER BY sku ASC";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }catch(PDOException $e){
            $e->getMessage();
        }
        

    }

    public function deleteProduct($sku){
        try{
            $query = "DELETE FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);
        }catch(PDOException $e){
            $e->getMessage();
        }
        
    }

    public function checkSkuDuplicate($sku){
        try{
            $query = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);
            $count = $stmt->rowCount();
            return $count;

            }catch(PDOException $e){
                $e->getMessage();
            }

}

}