<?php
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

        // echo "Image name is: ".$img_name."  The tmp is: ".$tmp;

        $product=new ProductManager();
        $product->updateProduct($name,$desc,$price, $img_name,$tmp, $_GET['id']);
       }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include("../includes/header.php") ?>

    <title>Bellagids</title>
  </head>
  <body class="bg-dark">

    <?php
        include("navbar.php")
    ?>
      <div class="container" style="margin-top: 120px;">
      <div class="container-fluid">
        <div class=" d-flex justify-content-center">
            <!-- general form elements -->
            <div style="width:60%;">
            <div class="card">
              <div class="card-header bg-secondary text-center text-white">
                
                <h3 class="card-title">Edit product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              if(isset($_GET['id'])){
                $product=new ProductManager();
                $product->getProductToUpdate($_GET['id']);
              }
              
              ?>
            </div>
      </div>


 


  <?php
    include("footer.php");
   include("../includes/foot.php");
   ?>
  </body>
</html>