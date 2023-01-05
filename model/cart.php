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
        $ip_address = getIPAddress();  
        $get_product_by_id=$_GET['add_to_cart'];
        //select query from the database to result the output of connection of tables
        $selected_query="SELECT * FROM `Cart` WHERE  product_id=$get_product_by_id and ip_address=$ip_address";
        $result_query = mysqli_query($connection, $selected_query); //the result show consistent connection from the database
        $num_of_rows=mysqli_num_rows($result_query); //show the number of rows that show the resukts from connection and selected_query
        if($num_of_rows >  0){ //create conditional statement that if the number of rows are great than zero that they should output that items already exist
            echo "<script>alert('This item is already added in cart')</script>";
            echo "<script>window.open('index.php' , '_self')</script>";
        }
    }else{ 
        //else, insert the resulted output into the database
        $insert_query = "INSERT INTO `Cart`(`product_id`, `quantity`, `ip_address`) VALUES ( $get_product_by_id,0, $ip_address)";
        $result_query = mysqli_query($connection, $insert_query);
        echo "<script>alert(Item added to cart successfully')</script>";
        echo "<script>window.open('index.php' , '_self')</script>";
    }
}


//create function to no.of items in cart
function number_of_cart_items(){
    if(isset($_GET['add_to_cart'])){
        global $connection;
        $ip_address = getIPAddress();  
        $get_product_by_id=$_GET['add_to_cart'];
        //select query from the database to result the output of connection of tables
        $selected_query="SELECT * FROM `Cart` WHERE  product_id=$get_product_by_id and ip_address=$ip_address";
        $result_query = mysqli_query($connection, $selected_query); //the result show consistent connection from the database
        $num_of_rows=mysqli_num_rows($result_query); //show the number of rows that show the resukts from connection and selected_query
        if($num_of_rows >  0){ //create conditional statement that if the number of rows are great than zero that they should output that items already exist
            echo "<script>alert('This item is already added in cart')</script>";
            echo "<script>window.open('index.php' , '_self')</script>";
        }
    }else{ 
        //else, insert the resulted output into the database
        $insert_query = "INSERT INTO `Cart`(`product_id`, `quantity`, `ip_address`) VALUES ( $get_product_by_id,0, $ip_address)";
        $result_query = mysqli_query($connection, $insert_query);
        echo "<script>alert(Item added to cart successfully')</script>";
        echo "<script>window.open('index.php' , '_self')</script>";
    }
}


?>