<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'eps_k';
    $conn = new mysqli($host,$username,$password,$dbName);

    if($conn -> connect_error)
    {
        die($conn -> connect_error);
    }

    // echo "Connection Successfuly";
?>