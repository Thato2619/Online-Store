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
    <title>SIGN UP & SIGN IN </title>
</head>
<body>
            <!-- Add Title -->
        <div class="bg-light">
        <h1 class="display-1">WELCOME OR WELCOME BACK!</h1>
        </div>
        
            
      <!--Section: Content-->
      <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
            <br>
              <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <form>
                  
                        <div class="bg-light">
                        <h1 class="display-1">SIGN IN</h1>
                    </div> 

                    <br>
                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> Remember me </label>
                        </div>
                        </div>

                        <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <a href='index.php' class='btn btn-success1'>SIGN IN</a>
                    </form>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">


            <!----- Registartion  ------->
              <br>

                    <div class="bg-light">
            <h1 class="display-1">REGISTRATION</h1>
        </div> 

        <br>
       
  

        <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">First name</label>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Submit button -->
            <a href='index.php'class='btn btn-success1'>REGISTER</a>
</form>
            </div>
          </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>