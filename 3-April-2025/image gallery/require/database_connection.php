<?php
	require_once("database_settings.php");
	
	$database_driver = new mysqli_driver();
	$database_driver->report_mode = MYSQLI_REPORT_OFF;
	
	$database_connection = mysqli_connect($host_name, $user_name, $password, $database_name);

	if(mysqli_connect_errno())
	{
		echo "<p><b style='color: red'><b>Database Connection Problem!...</b></p>";
		echo "<p><b style='color: red'><b>Error Code: </b>".mysqli_connect_errno()."</p>";
		echo "<p><b style='color: red'><b>Error Message: </b>".mysqli_connect_error()."</p>";
	}
?>