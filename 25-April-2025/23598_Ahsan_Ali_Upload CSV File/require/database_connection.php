<?php
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "reporting";

    mysqli_report(false);

    $connection = mysqli_connect($host_name, $user_name, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } 


?>
