<?php
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0 && isset($_GET['id'])){
                $product=new ProductManager();
                $product->deleteProductFromCart($_GET['id']);
                header("location:cart_page.php?message='Product deleted successfully'");
        }