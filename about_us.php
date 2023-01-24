<?php

   // error reporting
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);


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
            <a class="nav-link" href="contact.php">Contact</a>
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

  <!-- slideshow of models and products -->
  

  <div class="card text-bg-dark">
  <img src="./DBImages/product_images/pexels-angela-roma-7479812.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  </div>
</div>

<br>

<br>

<br>


<div class="bg-light">
    <h1 class="display-1">ABOUT US</h1>
  </div>


  <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="./DBImages/product_images/galley2.jpeg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">

              <h4><strong>Welcome to Glistening Glow</strong></h4>
              <p class="text-muted">
               The very place where your skin feels at home. We are company that cares a lot about the health of your skin. Having healthy skin matters as it has a very important part of our lives. Every part of your skin matters. Every ingredient has been intentionally hand-picked by our very own teams,  who strive to make every part of your self-care seamless.
              </p>
              <p><strong>Why Glistening Glow?</strong></p>
              <p class="text-muted">
                Everything about our skincare brand is made naturally. Every product is infused with SPF 50. We really cater to the health of your skin. Our products are nourshing, moisturizing, non-comedogenic, cruelty-free, vegan and definitely enhances your beautiful skin.
              </p>

              <br>

              <span class="text-muted">
                Good for all skin types & Dermatologist approved
              </span>
            </div>
          </div>
        </section>
        <!--Section: Content-->

<br>

<br>

<br>

  


<div class="bg-light">
    <h1 class="display-1">OUR TEAM</h1>
  </div>


<!-- add cards for employer -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="./DBImages/product_images/Co-Exec2.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Sandra Brown</h5>
        <p class="card-text">
          Sandra, is one of our very own co-executives. She is mainly involved in our photography and graphics team too.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./DBImages/product_images/CEO.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Kgomotsto Ngqolombe</h5>
        <p class="card-text">Kgomotsto is our very own CEO and co-founder of the company. She mainly involved in Creative Directing.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./DBImages/product_images/Co-Exec.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Lexi Smith</h5>
        <p class="card-text">
          Lexi, is our very own marketing director. She is one of our co-executives alongside Sandra. Lexi makes sure that we that every customer gets what they pay for.
        </p>
      </div>
    </div>
  </div>
</div>