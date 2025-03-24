<?php

    $database_driver = new mysqli_driver();
    $database_driver->report_mode = MYSQLI_REPORT_OFF;

    $host_name 		= "localhost";
	$user_name 		= "root";
	$password 		= ""; 
	$database_name 	= "e_commerce";

    $database_connection = mysqli_connect($host_name, $user_name, $password, $database_name);

    if(mysqli_connect_errno())
	{
        echo "<center>";
		echo "<h1 style='color: red'>Database Connection Problem!...</h1>";
		echo "<h1 style='color: red'><b>Error Number: </b>".mysqli_connect_errno()."</h1>";
		echo "<h1 style='color: red'><b>Error Message: </b>".mysqli_connect_error()."</h1>";
        echo "</center>";
	}
    else
    {
        echo "<center>";
        echo "<h1 style='color: green'>Database Connection Successful!...</h1>";
        echo "Hostnmame: ".$host_name."<br>";
        echo "Username: ".$user_name."<br>";
        echo "Password: ".$password."<br>";
        echo "Database: ".$database_name."<br>";
        echo "</center>";
       
    }
?>