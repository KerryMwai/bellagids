<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if(isset($_GET['id'])){
                $product=new ProductManager();
                $product->decrementItemCountOnCart($_SESSION['id'], $_GET['id']);
                header("location:cart_page.php?message='Increased successfully'");
        }