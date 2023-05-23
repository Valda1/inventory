<?php

session_start();

include 'models/product_types/DVD.php';
include 'models/product_types/book.php';
include 'models/product_types/furniture.php';
require 'controllers/product_controller.php';

if(isset($_POST["save"])){

        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $productType = $_POST["productType"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $length = $_POST["length"];
        $width = $_POST["width"];

        $hasErrors = false;

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
            //echo json_encode($hasErrors);
            echo json_encode($error);
            exit();
        }elseif(empty($error)){
            if($productType == 'DVD-disc'){
                $PC = new ProductController();
                $DVD = $PC->createDVD($sku, $name, $price, $productType, $size);
                //header("location: index.php?error=none");
                $hasErrors = false;
                echo json_encode($hasErrors);
                exit();
            }elseif($productType == 'Book'){
                $PC = new ProductController();
                $book = $PC->createBook($sku, $name, $price, $productType, $weight);
                //header("location: index.php?error=none");
                $hasErrors = false;
                echo json_encode($hasErrors);
                exit();
            }elseif($productType == 'Furniture'){
                $PC = new ProductController();
                $furniture = $PC->createFurniture($sku, $name, $price, $productType, $height, $length, $width);
                //header("location: index.php?error=none");
                $hasErrors = false;
                echo json_encode($hasErrors);
                exit();
            }
        }

}elseif(isset($_POST["cancel"])){
    header("location: index.php");
    exit();
}

?>

<script type="text/javascript">


//var hasErrors = "<?php $hasErrors; ?>";


    /*if(hasErrors == false){
        //window.location.replace('index.php?error=none');
        console.log(hasErrors);
        alert(hasErrors);
    }elseif(hasErrors == true){
        alert('there were errors');
    }*/


    </script>








