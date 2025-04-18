<?php
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "chainsmokers";

    $connection = mysqli_connect($host_name, $user_name, $password, $database_name);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
?>