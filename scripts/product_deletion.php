<?php

require '../database/database.php';

if(isset($_POST['delete'])){
    if(isset($_POST['sku'])){
        $deletion = new Database();

        foreach($_POST['sku'] as $sku){
            $deletion->deleteProduct($sku);
        }

        header("location: http://localhost/task//scripts/index.php?error=none");
    
}else{
    
    header("location: http://localhost/task//scripts/index.php");
}
}
