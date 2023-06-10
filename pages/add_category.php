<?php
include("../classes/database.php");
include("../classes/product_management.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['create'])){
  $name=$_POST['category'];
  
  $category=new ProductManager();
  $category->createCategory($name);
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
                <h3 class="card-title">Create Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label class='mb-4 fs-5'>Category Name</label>
                    <input type="text" name="category" class="form-control my-4 py-2 fs-5" id="inputCategory" placeholder="Enter category name">
                  </div>
                
            
                  <!-- <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Remember me</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="create" class="btn btn-secondary px-4 fs-5">Create</button>
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