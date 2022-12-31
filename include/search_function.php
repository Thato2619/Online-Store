<?php 
//require_once the  information from database
require_once __DIR__ . "/config2/dbConfig.php";
function search_products(){
    #create global variable with database connection
    global $connection;
    if(isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
    }
    #create selected-query variables that contains selected from products from the database
    $search_query = "SELECT * FROM `Products` WHERE product_keywords like '%$search_data_value%'";
    # write out the result_query varibale tht contains mysqli_query
    $result_query = mysqli_query($connection, $search_query);
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
              <a href='#'class='btn btn-success1'>ADD TO CART</a>
              <a href='#' class='btn btn-success'>VIEW MORE</a>
            </div>
          </div>
        </div>
        
        ";
    
      //make sure that every double quote is replaced 
    
    }
    
    
    
    
}



 ?>