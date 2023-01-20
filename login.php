
<?php 
session_start();

require_once __DIR__ . "/config2/dbConfig.php";
require_once __DIR__ . "/model/cart.php";
include ("/model/cart.php");
include ("/model/check_login.php");
include("/config2/dbConfig.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //Something was posted
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $user_password = $_POST['user_password'];

    if(!empty($Email) && !empty($user_password) && !is_numeric($Email)){
        
        //read from database
        $query = "SELECT * FROM `Users` WHERE Email = '$Email' limit 1";
        $result = mysqli_query($connection, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $user_password){

                    $_SESSION['user_ID'] = $user_data['user_ID'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Wrong email address or password!";
      

    }else{
        echo "Wrong email address or password!";
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
    <title>LOGIN </title>
</head>
<body>
<section class="vh-100" style="background-color: #fbfbf2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./DBImages/product_images/registration_wallpaper.jpeg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

               

                  <span class="h1 fw-bold mb-0 " style="color:#53917e; text-align: center;" >LOGIN</span>

                  <br>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                  <a href='index.php' class='btn btn-success'>LOGIN</a>
                  </div>

                 
                  
                  <p class="mb-5 pb-lg-2" style="color: black;">Don't have an account? <a href="registration.php"
                      style="color:#bd1e1e;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>