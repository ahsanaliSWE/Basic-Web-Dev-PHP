<?php
	require_once("require/database_settings.php");
	require_once("require/database.php");
	
	/*echo "<pre>";
	//print_r($_POST);
	print_r($_REQUEST);
	echo "</pre>";*/
	
	$database = new Database($host_name, $user_name, $password, $database);


	if(isset($_REQUEST['login'])){
		$result = $database->login($_REQUEST["email"], md5($_REQUEST["password"]));

		if($result->num_rows)
		{
			echo "Login Successfull!...";

			$data = mysqli_fetch_assoc($result);

			echo "<p><b>First Name: </b>".$data["first_name"]."</p>";
			echo "<p><b>Email: </b>".$data["email"]."</p>";

            ?>
                <a href="changepassword.php">Change Password</a>
            <?php
		}
		else
		{
			echo "Invalid Email/Password";
		}
	}

	if(isset($_REQUEST['signUp'])){
		$result = $database->signUp($_REQUEST["first_name"], $_REQUEST["last_name"],$_REQUEST["email"], md5($_REQUEST["password"]),$_REQUEST["gender"],);

		if($result)
		{
			echo "SignUp Successfull!...";
			echo "<br> Data inserted in database";
            header("location: login.php?msg=SignUp Successfull!...");
		}
		else
		{
			echo "Error! Data not inserted in database";
		}
	}

    if(isset($_REQUEST['ChangePassword'])){
		$result = $database->changePassword($_REQUEST["email"], md5($_REQUEST["old_password"]), md5($_REQUEST["new_password"]),);

		if($result)
		{
			echo "Pasword Changed Successfull!...";
			echo "<br> Data inserted in database";
            header("location: login.php?msg=Pasword Changed Successfull!...");
		}
		else
		{
			echo "Error! Data not inserted in database";
		}
	}

    if(isset($_REQUEST['ForgetPassword'])){
		$result = $database->forgotPassword($_REQUEST["email"], md5($_REQUEST["password"]));

		if($result)
		{
			echo "Pasword Changed Successfull!...";
			echo "<br> Data inserted in database";
            header("location: login.php?msg=Pasword Changed Successfull!...");
		}
		else
		{
			echo "Error! Data not inserted in database";
		}
	}
?>


