<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
       if(isset($_POST['update'])){
        $name=$_POST['name'];
        $desc=$_POST['description'];
        $price=$_POST['price'];
        $img_name=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $category=$_POST['category'];

        // echo "Image name is: ".$img_name."  The tmp is: ".$tmp." The name: ".$name." Description: ".$desc." The price ".$price. " Category: ".$category;

        $product=new ProductManager();
        $product->updateProduct($name,$desc,$price, $img_name,$tmp, $_GET['id'],$category);
        // echo "Success";
       }
?>