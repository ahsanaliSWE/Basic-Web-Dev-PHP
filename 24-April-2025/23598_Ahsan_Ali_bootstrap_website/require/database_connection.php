<?php
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "apple_db";

    $connection = mysqli_connect($host_name, $user_name, $password, $database);
    mysqli_report(false);
    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } 
?>