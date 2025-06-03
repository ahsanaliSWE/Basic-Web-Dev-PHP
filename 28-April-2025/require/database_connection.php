<?php
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "books_db";

    mysqli_report(false);
    $connection = mysqli_connect($host_name, $user_name, $password, $database);
    
    if (!$connection) {
        die("<h1>Connection failed: " . mysqli_connect_error()." - Error no: " . mysqli_connect_errno()."</h1>");
    } 
?>