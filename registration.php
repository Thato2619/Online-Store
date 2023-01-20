<?php 
session_start();

require_once __DIR__ . "/config2/dbConfig.php";
require_once __DIR__ . "/model/cart.php";
include ("/model/cart.php");
include ("/model/check_login.php");


if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //Something was posted
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $user_password = $_POST['user_password'];

    if(!empty( $Email) && !empty($user_password) && !is_numeric($Email)){
        
        //save to database
        $user_ID = random_num(20);
        $query = "INSERT INTO `Users`(`user_ID`, `Name`, `Email`, `user_password`) VALUES ('$user_ID','$Name','$Email','$user_password')";
        mysqli_query($connection, $query);

       //header("Location: login.php");
        //die;

    }else{
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap Link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- css file link--->
    <link rel="stylesheet" href="./static //CSS//styles.css">

    <!-- Font Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration</title>
</head>
<body>
    <!-----  Add registartion form------>
<section class="vh-100 bg-image"
  style="background-image: url('./DBImages/product_images/zoomed_background.png') !important;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5" style="color:#53917e">REGISTER</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                

                  <a href='login.php' class='btn btn-success'>LOGIN</a>
                <p class="text-center text-muted mt-5 mb-0">Have an account already? <a href="login.php"
                    class="fw-bold text-body" style='color:#bd1e1e'><u>Login here</u></a>
                </p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>