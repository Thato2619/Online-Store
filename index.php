<?php

require_once __DIR__ . "/config2/dbConfig.php";
require_once __DIR__ . "/model/cart.php";
include ("/model/cart.php");
//include ("model/check_login.php");
//$user_data = check_login($connection);
//$_SESSION;
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
            <a class="nav-link" href="view_more.php">Shop</a>
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
            <a class="nav-link" href="checkout.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php number_of_cart_items(); ?></sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price:<?php totalPrice(); ?></a>
          </li>
        </ul>

        <form class="d-flex" action="search_product.php" method="get">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <!--<button class="btn btn-outline-success" type="submit">Search</button>-->
          <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product">
        </form>
      </div>
    </div>
  </nav>
  
 <!-- Add  function -->
 <?php 
  searchProduct();
  ?>

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

  <!-- Add Title -->
  <div class="bg-light">
    <h1 class="display-1">WELCOME TO GLISTENING GLOW</h1>
  </div>

  <section>
    <div class="row px-1">
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
        echo " <div class='col-md-10 md-4'>
        <!-- Type of facial products-->
        <div class='row'>
          <!-- card of Ala-Rasi-->
          <div class='col-md-4  mb-4'>
            <div class='card'>
              <img src='./DBImages/product_images/$product_image' class='card-img-top' alt='$product_name'>
              <div class='card-body'>
                <h5 class='card-title'>$product_name</h5> 
                <p class='card-text'>$product_description</p>
                <p class='card-text'>R$product_price</p>
                <a href='cart.php?index.php=$product_id 'class='btn btn-success1'>CONTINUE TO SHOP</a>
                <a href='view_more.php?product_id=$product_id' class='btn btn-success'>VIEW MORE</a>
              </div>
            </div>
          </div>
          ";
        //make sure that every double quote is replaced 
        
      }
      ?>
  </section>

  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="background-color: #95a78d !important; color:#fbfbf2 !important;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Glistening Glow
          </h6>
          <p>
            Where your skin is intentionally cared for in every sort of way. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Our Products
          </h6>
          <p>
            <a href="cart.php" class="text-reset">Ala-Rasi</a>
          </p>
          <p>
            <a href="cart.php" class="text-reset">Eudaimonia</a>
          </p>
          <p>
            <a href="cart.php" class="text-reset">Hygge</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            More Info
          </h6>
          <p>
            <a href="view_more.php" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="about.php" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="cart.php" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="contact.php" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Cape Town,Century City, SA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            glisteningGlowInfo@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +21 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="index.php">GlistenGlow.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>