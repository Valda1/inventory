<?php

//namespace task\core;

//use task\models\Product;
//use PDO;

//class Database{

    $connection = mysqli_connect("localhost", "root", "", "store");

    if(!$connection){
        die("Connection error");
    }
    //private PDO $pdo;
    /*private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "store";
    
    public function connect(){
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection; 
    }*/

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

    /*public function createProduct($query){
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

    }*/

    /*public function deteleProduct($query){
        $conn = $this->connect();

    }*/


//}

//$DB = new Database();
//inside () you write the query
//for example $DB->getAllProducts("select * from products");
//or $query = "select * from users";
//$data = $DB->getAllProducts($query);
//print_r($data);