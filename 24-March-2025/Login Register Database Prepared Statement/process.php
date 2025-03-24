<?php
require_once 'require/database_connection.php';

session_start();


if (!$database_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

        $query = "INSERT INTO employee (name, email, password, gender, country, phone, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
       
        $statement = mysqli_prepare($database_connection, $query);

        mysqli_stmt_bind_param($statement, "sssssss", $name, $email, $password, $gender, $country, $phone, $address);
        
	    $result = mysqli_stmt_execute($statement);

        if(isset($name) && isset($email) && isset($password) && isset($gender) && isset($country) && isset($phone) && isset($address)) {
            if($result){
                header("Location: login.php?msg=Registration Sucessfull Please Login!..."); 
	        } else{
	        	echo "<p style='color: red'><b>Record Not Inserted Successfully!...</b></p>";
	        	echo "<p>Error No: ".mysqli_stmt_errno($statement)."</p>";
	        	echo "<p>Error Message: ".mysqli_stmt_error($statement)."</p>";
            }
        }
}

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT employee_id, email, password FROM employee WHERE email = ? AND password = ?";

        $statement = mysqli_prepare($database_connection, $query);
        
        mysqli_stmt_bind_param($statement, "ss", $email, $password);

        mysqli_stmt_execute($statement);

        mysqli_stmt_bind_result($statement, $employee_id, $email, $password);

        $result = mysqli_stmt_fetch($statement);


        if ($result) {

            $_SESSION['employee_id'] = $employee_id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            header("Location: dashboard.php"); 
        } else {
            header("Location: login.php?msg=Invalid email or password!..."); 
        }

    }
?>
