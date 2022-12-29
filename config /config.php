<?php 

$connection = mysqli_connect('localhost', 'root', '', 'Online_Store');

if($connection) {
    echo "Connected Successfully";
}else{
    die(mysqli_error($connection));
}



?>