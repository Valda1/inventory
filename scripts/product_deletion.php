<?php

require '../database/database.php';

if(isset($_POST["delete"])){
    if(isset($_POST["sku"])){
        $DB = new Database();

        $products = $_POST["sku"];

        foreach($products as $sku){
            $DB->deleteProduct($sku);
        }

        header("location: ../index.php?error=none");
        exit();
  
}

}else{
    header("location: ../index.php");
    exit();
}
