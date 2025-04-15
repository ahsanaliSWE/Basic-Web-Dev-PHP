<?php
    session_start();
    require_once("require/database_connection.php");

    if(isset($_REQUEST['register'])) {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $password = md5($_REQUEST['password']);

        if(empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
            header("Location: register.php?message=Please fill all fields.");
            return;
        }  
        
        if(isset($_FILES['profile_image'])) {
            $file_name = $_FILES['profile_image']['name'];
            $file_tmp = $_FILES['profile_image']['tmp_name'];
            $file_size = $_FILES['profile_image']['size'];
            $file_type = $_FILES['profile_image']['type'];

            move_uploaded_file($file_tmp, "profile_img/".$file_name);
        } else {
            $file_name = "1.jpg";
        }

        $query = "INSERT INTO user (first_name, last_name, email, password, profile_image) VALUES 
                ('".$first_name."', '".$last_name."', '".$email."', '".$password."', '".$file_name."')";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: login.php?message=Registration successful! You can now login.");
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    else if(isset($_REQUEST['login'])) {
        $email = $_REQUEST['email'];
        $password = md5($_REQUEST['password']);

        if(empty($email) || empty($password)) {
            header("Location: login.php?message=Please fill all fields.");
            return;
        }  

        $query = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_array($result);

        if ($data) {
            $query = "UPDATE user SET is_online = 1 WHERE user_id='".$data['user_id']."'";
            $result = mysqli_query($connection, $query);
            
            if (!$result) {
                echo "Error: " . mysqli_error($connection);
            }

            $_SESSION['users'] = $data;
            $_SESSION['users']['is_online'] = 1;
            header("Location: chat_dashboard.php");
        } else {
            header("Location: login.php?message=Invalid email or password.");
        }
    }
?>