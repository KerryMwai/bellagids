<?php
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if(isset($_GET['id'])){
                $product=new ProductManager();
                $product->deleteProduct($_GET['id']);
                header("location:admin_dashboard.php?message='Product deleted successfully'");
        }