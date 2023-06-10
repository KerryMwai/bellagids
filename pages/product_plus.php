<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
       if(isset($_POST['create'])){
        $name=$_POST['name'];
        $desc=$_POST['description'];
        $price=$_POST['price'];
        $img_name=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $category=$_POST['category'];

        // echo "Image name is: ".$img_name."  The tmp is: ".$tmp;

        $product=new ProductManager();
        $product->addProduct($name,$desc,$price, $img_name,$tmp,$category);
        header("location:admin_dashboard.php");
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



  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin_dashboard.php">
           <h1 class="text-white">BELLA GIDDS</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
            <ul class="d-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <span class="p-2">
                            <?php
                                echo $_SESSION['user_email'];
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="signout.php"><i class="fa-solid fa-right-to-bracket"></i> <span class="p-2">Logout</span></a></li>
                    </ul>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top: 120px;">
      <div class="container-fluid">
        <div class=" d-flex justify-content-center">
            <!-- general form elements -->
            <div style="width:60%;">
            <div class="card">
              <div class="card-header bg-secondary text-center text-white">
                
                <h3 class="card-title">Create product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="productName">Product category</label>
                    <select class='form-select my-3' name='category'>
                      <?php
                          $categories=new ProductManager();
                          $categories->getAllCategoriesForSelecion();
                      ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="productName">Product name</label>
                    <input type="text" name="name" class="form-control mt-3" id="productName" placeholder="Enter product name">
                  </div>
                  <div class="form-group">
                    <label for="productName">Product description</label>
                    <input type="text" name="description" class="form-control mt-3" id="description" placeholder="Enter product description">
                  </div>
                  <div class="form-group">
                    <label for="productName">Product price</label>
                    <input type="number" name="price" class="form-control mt-3" id="price" placeholder="Enter product price">
                  </div>
                  <div class="form-group">
                    <label for="productName">Product image</label>
                    <input type="file" name="image" class="form-control mt-3">
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="create" class="btn btn-primary">Create Product</button>
                </div>
              </form>  
            </div>
      </div>


 


  <?php
    include("footer.php");
   include("../includes/foot.php");
   ?>
  </body>
</html>