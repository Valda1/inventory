<?php

require '../database/database.php';

if(isset($_POST["delete"])){
    if(isset($_POST["product"])){
        $deletion = new Database();

        //$sku[] = $_POST["sku"];

        foreach($_POST["product"] as $product){
            $deletion->deleteProduct($product);
        }

        header("location: http://localhost/task//scripts/index.php?error=none");
    
}else{
    
    header("location: http://localhost/task//scripts/index.php");
}
}
