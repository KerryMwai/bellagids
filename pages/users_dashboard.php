<?php
session_start();

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="./fontawesome-free-6.4.0-web//js/all.js"></script>
<script src="./fontawesome-free-6.4.0-web/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Bellagids</title>
  </head>
  <body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
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
                  <li><a class="dropdown-item" href="#">Outwear</a></li>
                  <li><a class="dropdown-item" href="#">Lingerie and Sleepwear</a></li>
                  <li><a class="dropdown-item" href="#">Formal Wear</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="d-flex">
                <li class="nav-item">
                
                    <a class="nav-link active text-white" aria-current="page" href="./pages/cart_page.php"><i class="fa-solid fa-cart-plus"></i><span class="p-2">Cart</span></a>
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
        <div class="row d-flex mb-4 jsutify-content-center">
            <h2>Happy Shopping</h2>

        </div>
        <div class="row mb-lg-4 mb-md-4 mb-sm-4 ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Another  row -->

        <div class="row mb-lg-4 mb-md-4 mb-sm-4 ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

        </div>




        <!-- Another row -->
        <div class="row mb-lg-4 mb-md-4 mb-sm-4 ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card m-sm-2 m-xsm-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Cargo Pants</h3>
                        <p class="text-white"><span class="text-warning">Price </span>  KES 2000/=</p>
                    </div>
                    <div class="card-body bg-secondary">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1387081753/photo/unrecognized-person-in-roller-skates-standing-in-the-parking-lot-of-a-public-garage.jpg?s=1024x1024&w=is&k=20&c=qI60YAoi2E4w-poYKY4pS7CatW9zoxanICAFKwmwbd8=" alt="">
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="#" class="text-decoration-none text-warning"><h4>Buy Now</h4></a>
                    </div>
                </div>
            </div>

        </div>
      </div>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.css">
<link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
 


  <?php
    include("./pages/footer.php");
   ?>
  </body>
</html>