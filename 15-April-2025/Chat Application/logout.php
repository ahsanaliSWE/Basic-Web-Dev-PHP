<?php
    session_start();
    require_once("require/database_connection.php");

    if(isset($_SESSION['users'])) {
        $user_id = $_SESSION['users']['user_id'];
        $query = "UPDATE user SET is_online = 0 WHERE user_id='".$user_id."'";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            echo "Error: " . mysqli_error($connection);
        }
    }

    unset($_SESSION['users']);
    session_destroy();
    header("Location: login.php?message=You have logged out successfully.");
?>