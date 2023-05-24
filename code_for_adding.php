<?php

session_start();

include 'models/product_types/DVD.php';
include 'models/product_types/book.php';
include 'models/product_types/furniture.php';
require 'controllers/product_controller.php';

if(isset($_POST["save"])){

    //$data = json_decode(file_get_contents('php://input'), true);
    

    /*echo $data["sku"];
    echo $data["name"];
    echo $data["price"];
    echo $data["productType"];
    echo $data["size"];
    echo $data["weight"];
    echo $data["height"];
    echo $data["length"];
    echo $data["width"];*/

    //echo json_encode($data);

        echo $sku = $_POST["sku"];
        echo $name = $_POST["name"];
        echo $price = $_POST["price"];
        echo $productType = $_POST["productType"];
        echo $size = $_POST["size"];
        echo $weight = $_POST["weight"];
        echo $height = $_POST["height"];
        echo $length = $_POST["length"];
        echo $width = $_POST["width"];

        //$data = json_decode(file_get_contents('php://input'), true);
        //echo json_encode($data);

        

        //$hasErrors = false;

        //$hasErrors = $_POST["hasErrors"];

        $PC = new ProductController();
        $error = $PC->validateInput($sku, $name, $price, $productType, $size, $weight, $length, $height, $width);

        if(!empty($error)){
            foreach($error as $e){
                echo "<span class='error'>" . $e . "</span> <br>";
            }
            //$error = $_POST["error"];
            //$_SESSION["error"] = $error;
            //header("location: add-product.php");
            //$hasErrors = true;
            //$hasErrors = $_POST["hasErrors"] ?? true;
            //$hasErrors = (string)filter_input(INPUT_POST, 'hasErrors') ?? true;
            //return json_encode($hasErrors);
            //echo json_encode($error);
            exit();
        }elseif(empty($error)){
            if($productType == 'DVD-disc'){
                $PC = new ProductController();
                $DVD = $PC->createDVD($sku, $name, $price, $productType, $size);
                //header("location: index.php?error=none");
                //$hasErrors = false;
                //return json_encode($hasErrors); //TRY RETURN INSTED OF ECHO
                exit();
            }elseif($productType == 'Book'){
                $PC = new ProductController();
                $book = $PC->createBook($sku, $name, $price, $productType, $weight);
                //header("location: index.php?error=none");
                //$hasErrors = false;
                //echo json_encode($hasErrors);
                exit();
            }elseif($productType == 'Furniture'){
                $PC = new ProductController();
                $furniture = $PC->createFurniture($sku, $name, $price, $productType, $height, $length, $width);
                //header("location: index.php?error=none");
                //$hasErrors = false;
                //echo json_encode($hasErrors);
                exit();
            }


        }

}elseif(isset($_POST["cancel"])){
    header("location: index.php");
    exit();
}








