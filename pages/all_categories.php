<?php
session_start();
include("../classes/database.php");
include("../classes/product_management.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../includes/header.php") ?>
    <title>All categories</title>
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



      <div class="container d-flex justify-content-center" style="margin-top:120px">

            <div class="card" style="width:50%">
                
                    <div class="card-header bg-secondary text-center">
                        <p class="text-white fs-5">All Categories</p>
                    </div>
                    <div class="card-body bg-white">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category name</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                    $categories=new ProductManager();
                                    $categories->fetchAllCategories();
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

      </div>


<?php
    include("footer.php");
   include("../includes/foot.php");
   ?>
</body>
</html>