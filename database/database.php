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
            //$query = "SELECT sku, name, price, productType, size, weight, height, length, width FROM products ORDER BY sku ASC";
            //Working thibg
            $query = "SELECT * FROM products ORDER BY sku ASC";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            //$results = $stmt->fetch(PDO::FETCH_ASSOC);
            //print_r($results);

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $products[] = $row;
            }

            /*while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $products[] = $row;
            }*/

            //return $products; //working thing ends here

            //another try
            /*$query = $this->connect()->query("SELECT * FROM products ORDER BY sku ASC");
            $results = $query->fetch(PDO::FETCH_ASSOC);
            return $results;*/

        }catch(PDOException $e){
            $e->getMessage();
        }

    }

    public function deleteProduct($product){
        try{
            /*$query = "DELETE FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);*/

            $query = "DELETE FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            //$stmt->execute([$sku]);
            $stmt->execute([$product->sku]);
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