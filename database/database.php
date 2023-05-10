<?php

//namespace database;
//use PDO;

class Database{

    private PDO $connect;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "store";

    public function connect(){
        try{
            $connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;

            /*$sql = "CREATE TABLE products(
                sku VARCHAR(255) NOT NULL PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                price DOUBLE NOT NULL,
                product_type VARCHAR NOT NULL,
                attributes VARCHAR NOT NULL
            ),

            INSERT INTO products(sku, name, price, product_type, attributes) VALUES 
            (JVG200123, Acme DISC, 1.00, DVD, 700),
            (GGWP0007, War and Peace, 20.00, 2),
            (TR120555, Chair, 40.00, 24x45x15)";

            if(!sql){
                die();
            }*/

        }catch(PDOException $exception){
            $exception->getMessage();
            die();
        }
    }

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

    public function deleteProduct($sku){
        $query = "DELETE FROM products WHERE sku = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$sku]);
    }

    public function checkSkuDuplicate($sku){
        try{
            $query = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$sku]);
            $count = $stmt->rowCount();
            return $count;
            //if($count > 0){
            //$error = "<span>This sku number has already been taken!</span>";
        

            }catch(PDOException $e){
                $e->getMessage();
            }

}
}

    /*public function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        }else{
            $data = false;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }

            return $data;
        }

    }

    public function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        }else{
            return true;
        }
        

    }*/