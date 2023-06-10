<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['update'])){
  $name=$_POST['category'];
    // echo $name;
  $category=new ProductManager();
  $category->updateCategory($_GET['id'],$name);
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
                      $categories=new ProductManager();
                      $categories->getAllCategoriesForAdminPageDropdown();
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


      <div class="container" style="margin-top: 120px;">
      <div class="container-fluid">
        <div class=" d-flex justify-content-center">
            <!-- general form elements -->
            <div style="width:60%;">
            <div class="card">
              <div class="card-header bg-secondary text-center text-white">
                <h3 class="card-title">Update Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label class='mb-4 fs-5'>Category Name</label>
                    <?php
                        if(isset($_GET['id'])){
                            $category=new ProductManager();
                            $category->getCategoryToUpdte($_GET['id']);
                        }
                    ?>
                  </div>
                
            
                  <!-- <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Remember me</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-secondary px-4 fs-5">Update</button>
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