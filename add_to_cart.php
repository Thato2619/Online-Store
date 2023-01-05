<?php 

sesssion_start();
if(isset($_GET['p_id'])){
    if(isset($_GET['quantity'])){
        $quantity = $_GET['quantity'];
    }else{
        $quantity = 1;
    }
    $p_id = $_GET['p_id'];

    $_SESSION['cart'][$p_id] = array('qunatity' => $quantity);

}

?>