<?php

namespace task\core;

//use task\models\Product;
//use PDO;

class Database{
    //private PDO $pdo;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "db_name";
    
    public function connect(){
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    public function createProduct(){

    }

    public function deteleProduct(){

    }

    public function updateProduct(){

    }

    public function getProduct(){

    }

    public function getAllProducts(){

    }


}