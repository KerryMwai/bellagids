<?php
include("../classes/database.php");
include("../classes/user_management.php");
if(isset($_POST['create_user'])){
    // $image_name=$_FILES['user_image']['name'];
    // $image_tmp=$_FILES['user_image']['tmp_name'];
    // $image="No image now";
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    // $pass1=$_POST['pass1'];
    // $pass2=$_POST['pass2'];

        $signup=new User($email,$pass1);
        $signup->SignUpUser();
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
                <h3 class="card-title">Signup</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="InputPassword1">Password</label>
                    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                  </div> -->
            
                  <!-- <div class="form-check">
                    <input type="checkbox" name="" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Remember me</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="create_user" class="btn btn-primary px-4">Signup</button>
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