<?php
include("../classes/database.php");
include("../classes/product_management.php");

if(isset($_POST['create_product'])){
    $image_name=$_FILES['product_image']['name'];
    $image_tmp=$_FILES['product_image']['tmp_name'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];

        $createProduct=new ProductManager($name,$description,$price,$image_name,$image_tmp);
        $createProduct->createProduct();
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
              <form method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Product name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name">
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