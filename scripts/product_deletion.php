<?php

require '../database/database.php';

if(isset($_POST["delete"])){
    if(isset($_POST["sku"])){
        $DB = new Database();

        $products = $_POST["sku"];

        foreach($products as $sku){
            $DB->deleteProduct($sku);
        }

        header("location: http://localhost/task//scripts/index.php?error=none");
    
}else{
    
    header("location: http://localhost/task//scripts/index.php");
}
}
