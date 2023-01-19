<?php
session_start();
require_once __DIR__ . "/config2/dbConfig.php";
require_once __DIR__ . "/model/cart.php";
include ("/model/cart.php");
r
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

        <form class="d-flex" action="" method="get">
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





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>