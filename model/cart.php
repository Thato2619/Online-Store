<?php
include("/config2/dbConfig.php");
#create IP Addrress
#https://www.javatpoint.com/how-to-get-the-ip-address-in-php 
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  



function cart(){
    if(isset($_GET['add_to_cart'])){
        global $connection;
        //$ip_address = getIPAddress();  
        $get_product_by_id=$_GET['add_to_cart'];
        //select query from the database to result the output of connection of tables
        $selected_query="SELECT * FROM `Cart` WHERE  product_id=$get_product_by_id";
        $result_query = mysqli_query($connection, $selected_query); //the result show consistent connection from the database
        $num_of_rows=mysqli_num_rows($result_query); //show the number of rows that show the resukts from connection and selected_query
        if($num_of_rows >  0){ //create conditional statement that if the number of rows are great than zero that they should output that items already exist
            echo "<script>alert('This item is already added in cart')</script>";
            echo "<script>window.open('index.php' , '_self')</script>";
        }
    }else{ 
        //else, insert the resulted output into the database
        $insert_query = "INSERT INTO `Cart`(`product_id`, `quantity`) VALUES ( $get_product_by_id,0)";
        $result_query = mysqli_query($connection, $insert_query);
        echo "<script>alert(Item added to cart successfully')</script>";
        echo "<script>window.open('index.php' , '_self')</script>";
    }
}


//create function to no.of items in cart
function number_of_cart_items(){
    if(isset($_GET['add_to_cart'])){
        global $connection;
        $get_product_by_id=$_GET['add_to_cart'];
       // $ip_address = getIPAddress(); //remove product_id and use ip_address 
        //select query from the database to result the output of connection of tables
        $selected_query="SELECT * FROM `Cart` WHERE product_id=$get_product_by_id";
        $result_query = mysqli_query($connection, $selected_query); //the result show consistent connection from the database
        $totalItems=mysqli_num_rows($result_query); //show the number of rows that show the resukts from connection and selected_query
        }else{ 
        //else, insert the resulted output into the database
        global $connection;
        //$ip_address = getIPAddress();
        $get_product_by_id=$_GET['add_to_cart'];
        $selected_query="SELECT * FROM `Cart` WHERE   product_id=$get_product_by_id";
        $result_query = mysqli_query($connection, $selected_query);
        $totalItems=mysqli_num_rows($result_query);
    }
    echo $totalItems;
}

function totalPrice(){
    global $connection;
    $get_product_by_id=$_GET['add_to_cart'];
    $total_price=0;
    $cart_query = "SELECT * FROM `Cart` WHERE product_id='$get_product_by_id'";
    $result = mysqli_query($connection, $cart_query);
    
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products=  $selected_query = "SELECT * FROM `Products` where product_id='$product_id'";
        $result_products=mysqli_query($connection, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_price']);
            $product_values = array_sum($product_price);
            $total_price+=$product_price;
        }
    }
    echo $total_price;

}


function searchProduct(){
    global $connection;
    if(isset($_GET['search_data-product'])){
      $search_data_value = $_GET['search_data'];
      $search_query = "SELECT * FROM `Products` WHERE product_keywords like '%$search_data_value%'";

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
              <a href='cart.php?index.php=$product_id 'class='btn btn-success1'>CONTINUE TO SHOP</a>
              <a href='view_more.php?product_id=$product_id' class='btn btn-success'>VIEW MORE</a>
            </div>
          </div>
        </div>
        ";
      //make sure that every double quote is replaced 
      
    }
    }
}
?>