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

    public function getAllProducts(){
        try{
            $products = array();
            $query = "SELECT * FROM products ORDER BY sku ASC";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $products[] = $row;
            }

            return $products;

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