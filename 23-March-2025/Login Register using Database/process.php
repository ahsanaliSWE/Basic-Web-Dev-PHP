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

        $query = "INSERT INTO users (name, email, password, gender, country, phone, address) 
                VALUES ('$name', '$email', '$password', '$gender', '$country', '$phone', '$address')";

        if(isset($name) && isset($email) && isset($password) && isset($gender) && isset($country) && isset($phone) && isset($address)) {
            if (mysqli_query($database_connection, $query)) {
                header("Location: login.php?message=Registration successful! Please login.");
            } else {
                echo "Error: " . mysqli_error($database_connection);
            }
        } else {
            echo "<p style='color: red;'>Please fill all the fields!</p>";
        }
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($database_connection, $query);

        if ($row = mysqli_fetch_assoc($result)) {

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            header("Location: dashboard.php"); 
        } else {
            echo "<p style='color: red;'>Invalid email or password!</p>";
        }

    }
?>
