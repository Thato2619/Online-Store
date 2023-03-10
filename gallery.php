<?php
require_once __DIR__ . "/config2/dbConfig.php";

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
            <a class="nav-link" href="contact_us.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comingSoon.php">COMING SOON</a>
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


<!--  add gallery images --->
<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 hover">
    <img
      src="./DBImages/product_images/Hygge.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      class="hover_image"
      alt="Boat on Calm Water"
    />

    <img
      src="./DBImages/product_images/Ala-Rasi.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      class="hover_image"
      alt="Ala-Rasi product"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0 hover">
    <img
      src="./DBImages/product_images/pexels-angela-roma-7479816.jpeg"
      class="w-100 shadow-1-strong rounded mb-4 "
      class="hover_image"
      alt="Angela-Roma model products"
    />

    <img
      src="./DBImages/product_images/pexels-angela-roma-7479819.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      class="hover_image"
      alt="gallery2 images"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0 hover">
    <img
      src="./DBImages/product_images/gallery.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      class="hover_image"
      alt="Waves at Sea"
    />

    <img
      src="./DBImages/product_images/gallery3.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      class="hover_image"
      alt="Gallery3 image"
    />
  </div>
</div>
<!-- Gallery -->
<!-- Gallery -->