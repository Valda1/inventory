<?php

//namespace task\core;

//use task\models\Product;
//use PDO;

class Database{

    //private PDO $connect;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "store";

    /*protected function connect(){
        //MAYBE ADD TRY CATCH OR SOME OTHER ERROR HANDLING
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }*/

    protected function connect(){
        try{
            $connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
            //return statement maybe

            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch(PDOException $exception){
            $exception->getMessage();
            die();
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