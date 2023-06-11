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

   <?php include("../includes/header.php") ?>

    <title>Bellagids</title>
  </head>
  <body class="bg-dark">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
        <?php
            if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0){
              echo "
              <a class='navbar-brand' href='users_dashboard.php'>
                <h1 class='text-white'>BELLA GIDDS</h1>
              </a>
              ";
            }
          ?>
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
        <div class=" d-flex justify-content-center">
            <!-- general form elements -->
            <div style="width:80%;">
            <div class="card">
              <div class="card-header bg-secondary text-center text-white">
                <h3 class="card-title">Your cart</h3>
              </div>
              
               <?php
                   if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==0){
                    $cart=new ProductManager();
                    $cart->fetchUsersProductToDisplayOnCart($_SESSION['id']);
                   }
               ?>
             <!-- card-footer -->
                
            </div>


 


  <?php
    // include("footer.php");
   include("../includes/foot.php");
   ?>
  </body>
</html>