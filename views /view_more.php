<?php

   // error reporting
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

require_once __DIR__ . "/../config2/dbConfig.php";
include_once __DIR__ . ""

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./static /CSS/styles.css">
</head>
<title>Glistening Glow</title>
<!-- Bootsrap Link--->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- css file link--->
<link rel="stylesheet" href="./static //CSS//styles.css">

<!-- Font Awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg nav-colour">
    <div class="container-fluid">
      <img src="./static /Images/online_store_logo.png" alt="" class="store_logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price:100 -+</a>
          </li>
        </ul>

        <form class="d-flex" role="search" action="/model/search.bar.php" method="get">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- slideshow of models and products -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="./static //Images//pexels-angela-roma-7480130.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./static //Images//galley2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./static //Images//pexels-angela-roma-7479917.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  </div>


  <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
    <?php
      #create selected-query variables that contains selected from products from the database
      $selected_query = "SELECT * FROM `Products`";
      # write out the result_query varibale tht contains mysqli_query
      $result_query = mysqli_query($connection, $selected_query);
      #$row = mysqli_fetch_assoc($result_query);
      #echo $row['product_name']; (check if the name of product is visible on webpage)

      //fetch product from the database using fetch function
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_description = $row['product_description'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];
        $product_keywords = $row['product_keywords'];

        echo " <div class='col-md-8 col-lg-6 col-xl-4'>
        <div class='card' style='border-radius: 15px;'>
          <div class='bg-image hover-overlay ripple ripple-surface ripple-surface-light'
            data-mdb-ripple-color='light'>
            <img src='./DBImages/product_images/$product_image'
              style='border-top-left-radius: 15px; border-top-right-radius: 15px;'class='img-fluid'
              alt='$product_name' />
            <a href'#!'>
              <div class='mask'></div>
            </a>
          </div>
          <div class='card-body pb-0'>
            <div class='d-flex justify-content-between'>
              <div>
                <p><a href='#!' class='text-dark'> $product_name</a></p>
              </div>
              <div>
                <div class='d-flex flex-row justify-content-end mt-1 mb-4 text-danger'>
                  <i class='fas fa-star'></i>
                  <i class='fas fa-star'></i>
                  <i class='fas fa-star'></i>
                  <i class='fas fa-star'></i>
                </div>
                <p class='small text-muted'>Rated 4.0/5</p>
              </div>
            </div>
          </div>
          <hr class='my-0' />
          <div class='card-body pb-0'>
            <div class='d-flex justify-content-between'>
              <p><a href='#!' class='text-dark'>$product_price</a></p>
              <p class='text-dark'>$product_description</p>
            </div>
            <p class='small text-muted'></p>
          </div>
          <hr class='my-0' />
          <div class='card-body'>
            <div class='d-flex justify-content-between align-items-center pb-2 mb-1'>
              <a href='index.php' class='text-dark fw-bold'>Cancel</a>
              <button type='button' class='btn btn-primary'>ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

       
          ";

        //make sure that every double quote is replaced 

      }
      ?>

      





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>