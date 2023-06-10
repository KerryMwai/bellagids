<?php
session_start();
include("../classes/database.php");
include("../classes/user_management.php");
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
          <a class="navbar-brand" href="users_dashboard.php">
           <h1 class="text-white">BELLA GIDDS</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
            <ul class="d-flex">
            <li class="nav-item">
                
                <a class="nav-link active text-white" aria-current="page" href="cart_page.php"><i class="fa-solid fa-cart-plus"></i><span class="p-2">Cart</span></a>
              </li>
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
                <h3 class="card-title">Enter phone number to pay</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action='pay.php'>
                <div class="card-body">
                  <div class="form-group my-3">
                    <label for="exampleInputPassword1">Total amount to pay</label>
                    <?php
                        if(isset($_SESSION['total_amount'])){
                          $amount=$_SESSION['total_amount'];
                          echo "
                            <input type='text' value='Ksh. $amount/='  name='amount' class='form-control my-3' disabled>
                          ";
                        }
                    ?>
                  </div>
                  <div class="form-group my-3">
                    <label for="phoneNumber">Email phone number</label>
                    <input type="text" name="phone" class="form-control my-3" id="phoneNumber" placeholder="Enter phone number">
                  </div>
                 
            
                  <!-- <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Remember me</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">

                       <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                        <input type='submit' name="pay" value="Pay" class="btn btn-secondary px-4 float-right">
                        </div>
                       </div>

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