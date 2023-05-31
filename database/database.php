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
            $query = "SELECT * FROM products ORDER BY sku ASC";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;

            /*$query = "SELECT sku, name, price, productType, weight FROM products ORDER BY sku ASC";
            $stmt = $DB->connect()->prepare($query);
            $stmt->execute();
            //$stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
            $stmt->fetchAll(PDO::FETCH_FUNC, "Book::buildObject");*/

            
            /*$book = new Book();
            $query = "SELECT sku, name, price, productType, weight FROM products ORDER BY sku ASC";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            //$stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
            $stmt->fetch(PDO::FETCH_INTO, $book);
            echo "HELLO";*/
            /*foreach($stmt as $a){
                print_r($a);
            }

            print_r($book);*/

            //another try
            /*$query = $this->connect()->query("SELECT * FROM products ORDER BY sku ASC");
            $results = $query->fetch(PDO::FETCH_ASSOC);
            return $results;*/
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