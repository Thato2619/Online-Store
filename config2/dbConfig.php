<?php 

//create variables to of the database
$serverName = 'localhost';
$userName = 'root';
$password = 'root';
$dbName = 'Online-Store';


//create connection in database
$connection = mysqli_connect($serverName, $userName, $password, $dbName);

//check if connection is successful
if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
}
#echo "Connection succcessful!";


?>