<?php
include("../classes/database.php");
include("../classes/user_management.php");

if(isset($_POST['signin'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $signInUser=new User($email,$pass);
  $signInUser->SignIn();

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
      <div class="container" style="margin-top: 100px;">
      <div class="container-fluid">
        <div class=" d-flex justify-content-center">
            <!-- general form elements -->
            <div style="width:60%;">
            <div class="card">
              <div class="card-header bg-secondary text-center text-white">
                <h3 class="card-title">Create Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Product name</label>
                    <input type="email" name="name" class="form-control" placeholder="Enter product name">
                  </div>
                  <div class="form-group mt-2">
                    <label>Product Description</label>
                    <textarea name="description"  cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group mt-2">
                    <label >Product price</label>
                    <input type="number" step="any"  name="price" class="form-control" placeholder="Enter product price">
                  </div>

                  <div class="form-group mt-2">
                    <label >Product price</label>
                    <input type="file"  name="product_image" class="form-control">
                  </div>
            
                  <!-- <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Remember me</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="mergin: 160px;">
                  <button type="submit" name="create_product" class="btn btn-primary">Create Product</button>
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