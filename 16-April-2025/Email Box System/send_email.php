<?php
    require_once('require/database_connection.php');

    if (!isset($_COOKIE['email']) || !isset($_COOKIE['password'])) {
        header("Location: login.php?msg=Please login first");
        return;
    }

    if(isset($_REQUEST['action'])){

        extract($_REQUEST);

        $sender_id = base64_decode($_COOKIE['user_id']);

        $status = ($action === "Send") ? "sent" : "draft";
        
        $query = "SELECT * FROM users WHERE email = '" .$to . "'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        if ($result->num_rows) {
            $row = mysqli_fetch_array($result);
            $receiver_id = $row['user_id'];

            $query = "INSERT INTO emails (sender_id, receiver_id, subject, message, status) VALUES ('$sender_id', '$receiver_id', '$subject', '$message', '$status')";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            if ($result && $action === "Send") {

                header("Location: compose.php?msg=Email sent successfully&color=green");
                return;

            }else if($result && $action === "Save as Draft"){

                header("Location: compose.php?msg=Draft saved successfully&color=green");
                return;

            }
             else {

                header("Location: compose.php?msg=Failed to send email&color=red");
                return;

            }

        } else {
            header("Location: compose.php?msg=Invalid email address or user not found&color=red");
            return;
           
        }       
        
    }
?>