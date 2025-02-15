<?php

session_start();
    include("../classes/database.php");
    include("../classes/product_management.php");
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../fontawesome-free-6.4.0-web//js/all.js"></script>
<script src="../fontawesome-free-6.4.0-web/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Bellagids</title>
  </head>
  <body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
        <div class='container-fluid'>
         <?php
            if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0){
              echo"
              <a class='navbar-brand' href='users_dashboard.php'>
                <h1 class='text-white'>BELLA GIDS</h1>
              </a>
              ";
            }
         ?>
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
                     if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0){
                      $categories=new ProductManager();
                      $categories->getAllCategoriesForUsersPageDropdown();
                     }
                    ?>
                </ul>
              </li>
            </ul>
            <form method="POST" class="d-flex">
              <input class="form-control me-2" name="searchterm" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" name='searchbtn' type="submit">Search</button>
            </form>
            <ul class="d-flex">
                <li class="nav-item">
                
                    <a class="nav-link active text-white" aria-current="page" href="cart_page.php"><i class="fa-solid fa-cart-plus fs-5"></i><span class="p-2"></span><span class="badge badge-light fs-6 bg-danger px-2 text-white">
                      <?php
                        $items=new ProductManager();
                        echo $items->countProductsOnCart($_SESSION['id']);
                      ?>
                    </span></a>
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
        <div class="row d-flex mb-4 jsutify-content-center text-center text-white">
            <h2>Happy Shopping</h2>
            
                      <?php
                          if(isset($_GET['message'])){
                            $msg=$_GET['message'];
                            echo "
                            <div class='card bg-success '>
                                <div class='card-body text-center'>
                              <h5>$msg</h5>
                              </div>
                            </div>
                            ";
                          }
                      ?>
              

        </div>
        <div class="row mb-lg-4 mb-md-4 mb-sm-4 ">
            <?php

              if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0){
                $products=new ProductManager();
                  if(isset($_POST['searchbtn'])){
                    $term=$_POST['searchterm'];
                    $products->searchForProductForUsers($term);
                  }else{
                  
                    $products->getAllProductsTodisplayForUsers();
                  }
              }
           ?>

        </div>




      </div>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.css">
<link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.min.css">
 


  <?php
    include("./pages/footer.php");
   ?>
  </body>
</html>