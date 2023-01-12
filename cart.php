<?php 
session_start();

//connect to database
$dbName = 'Online-Store';
$serverName = 'localhost';
$userName = 'root';
$password = 'root';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);

if (isset($_POST['add'])){
    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'], 'product_id');

        if(!in_array($_GET['id'], $session_array_id)){
            $session_array = array(
                'product_id' => $_GET['id'],
                'item_name' => $_POST['product_name'],
                'product_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['quantity']
            );

            $_SESSION['cart'][0] = $session_array;
        }else{
            $session_array = array(
                'product_id' => $_GET['id'],
                'item_name' => $_POST['hidden_name'],
                'product_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['quantity']
            );

            $_SESSION['cart'][0]= $session_array;
        }
    }
}


?>


<?php
if(isset($_POST["add"])){
    if(isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array($_GET["id"], $item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
               'product_id' => $_GET["id"],
               'item_name ' => $_POST["hidden_name"],
               'product_price' => $_POST["hidden_price"],
               'item_quantity' => $_POST["quantity"],
            );
        }else{
            echo '<script>alert(Product is already added in cart)</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name ' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if(isset($_GET['action'])){
    if ($_GET['action'] == "delete"){
        foreach ($_SESSION["cart"] as $key => $value){
            if ($value['product_id'] == $_GET["id"]){
                unset($_SESSION["cart"][$key]);
                echo '<script>alert(Product has been removed)</script>';
                echo '<script>window.location="cart.php"</script>';
            } 
        }
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
    <title>Shopping cart</title>
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
        </ul>
</nav>

<div class="container" style="width: 65%">
    <h1 class="display-1">SHOPPING CART</h1>
</div>
    <?php 
    $query = "SELECT * FROM `Products` ORDER BY product_id ASC";
    $result = mysqli_query($connection, $query);
    //$product_id = $row['product_id'];
    /*$product_name = $row['product_name'];
    $product_description = $row['product_description'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];
    $product_keywords = $row['product_keywords'];*/
    $product_image = $row['product_image'];
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            ?>

    <div class="col-md-3">
        <form method="post" action="cart.php?action=add&id=<?php echo $row['product_id']?>">
            <div class="product">
                <img src="<?php $product_image ?>" class="img-responsive">
                <h5 class="text-info"><?php echo $row['product_name'];?></h5>
                <h5 class="text-danger"><?php echo $row['product_price'];?></h5>
                <input type='text' name="quantity" class="form-control" value="1">
                <input type='hidden' name="hidden_name" value="<?php echo $row['product_name']?>">
                <input type='hidden' name="hidden_price" value="<?php echo $row['product_price']?>">
                <input type='submit' name="add"  style="margin-top: 5px"  class="btn btn-success"value="Add To Cart">
                
            </div>
        </form>
    </div>
    <?php
        
    }
}

        ?>
  </div>

  <div style="clear: both"></div>


  <h1 class="display-1">SHOPPING CART DETAILS</h1>
  <div class="table-responsive">
      <table class="table table-bordered">

    <tr>
        <th width="30%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="13%">Price Details</th>
        <th width="10%">Total Price</th>
        <th width="17%">Remove Item</th>
    </tr>



    <?php
    if(!empty($_SESSION["cart"])){
        $total = 0;
        foreach ($_SESSION["cart"] as $key => $value){
       ?>
    <tr>
        <td><?php echo $value["['product_name']"]; ?></td>
        <td><?php echo $value["item_quantity"]; ?></td>
        <td> R <?php echo $value["product_price"]; ?></td>
        <td> R <?php echo number_format($value["item_quantity"] * $value["product_price"]); ?></td>
        <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"];?>"><span class="text-danger">Remove Items </span></a></td>
    </tr>
    <?php 
    $total = $total + ($value["item_quantity"] * $value["product_price"]);
    ?>
    <tr>
        <td colspan="3" align="right">Total</td>
        <th align="right"> R <?php echo number_format($total); ?></th>
        <td></td>
    </tr>
    <?php
    }
}
        ?>
    </table>
  </div>
  
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php 

/**
 * References from videos
 * This cart function has been influenced by the following:
 * https://www.youtube.com/watch?v=YloyMFPJyV4&t=330s
 * https://www.youtube.com/watch?v=IO5ezsURqyg
 * 
 * 
 * 
 *  * References from layout for login page
 * https://mdbootstrap.com/docs/standard/components/cards/
 * https://mdbootstrap.com/docs/standard/forms/overview/
 */
 



?>
