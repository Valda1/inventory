<?php

require 'database/database.php';

if(isset($_POST['delete'])){
    if(isset($_POST['sku'])){
        $deletion = new Database();

        foreach($_POST['sku'] as $sku){
            $deletion->deleteProduct($sku);
        }

        header("location: index.php?error=none");
    
}else{
    
    header("location: index.php");
}
}
