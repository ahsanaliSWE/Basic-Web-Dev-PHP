<?php

    require_once('require/database_connection.php');

	if(isset($_REQUEST['rememberMe'])){

		extract($_REQUEST);

		if(isset($_COOKIE['email']) && isset($_COOKIE['password']) && base64_decode($_COOKIE['email']) == $email && base64_decode($_COOKIE['password']) == $password){

			header("location:dashboard.php");
					
		}else{	

			header("location:login_form.php?msg=Cookie Not Set...!<br>Please Login Again by unchacking the Remember Me option...!");
			
		}

	}else{
		extract($_REQUEST);

			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

			$result = mysqli_query($connection,$query) or die(mysqli_error($connection));

			if($result->num_rows){
				$row = mysqli_fetch_array($result);

					setcookie("email",base64_encode($row['email']),time()+(60*2),"/","localhost",true,true);
					setcookie("password",base64_encode($row['password']),time()+(60*2),"/","localhost",true,true);

				header("location:dashboard.php?msg=Login Successfully...!");

			}else{

				header("location:login_form.php?msg=Invalid Email or Password...!");
			}
		
	}




?>