<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
       if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1 && isset($_POST['update'])){
        $name=$_POST['name'];
        $desc=$_POST['description'];
        $price=$_POST['price'];
        $img_name=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $category=$_POST['category'];

        //  echo "Image name is: ".$img_name."  The tmp is: ".$tmp;

        $product=new ProductManager();
        $product->updateProduct($_GET['id'],$name,$desc,$price, $img_name,$tmp,$category);
        header("location:admin_dashboard.php?message='Product updated successfully'");
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

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin_dashboard.php">
           <h1 class="text-white">BELLA GIDS</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                  if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1){
                      $categories=new ProductManager();
                      $categories->getAllCategoriesForAdminPageDropdown();
                  }
                    ?>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="d-flex">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-eye"></i> <span class="p-2">
                        Manage Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item mb-3" href="all_categories.php"><i class="fa-solid fa-hexagon-plus"></i> <span class="p-2">View Categories</span></a></li>
                      <li><a class="dropdown-item mb-3" href="product_plus.php"><i class="fa-solid fa-hexagon-plus"></i> <span class="p-2">Add Product</span></a></li>
                      <li><a class="dropdown-item mb-3" href="add_category.php"><i class="fa-solid fa-hexagon-plus"></i> <span class="p-2">Add Category</span></a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <span class="p-2"><?php
                            if(isset($_SESSION['user_email'])){
                                echo $_SESSION['user_email'];
                            }
                        ?></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../pages/signout.php"><i class="fa-solid fa-right-to-bracket"></i> <span class="p-2">Logout</span></a></li>
                    </ul>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top: 120px;margin-bottom: 120px;">
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
              if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1 && isset($_GET['id'])){
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