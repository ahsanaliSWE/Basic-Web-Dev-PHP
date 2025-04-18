<?php
    require_once('require/database_connection.php');

    if (!isset($_COOKIE['email']) || !isset($_COOKIE['password'])) {
        header("Location: login.php?msg=Please login first");
        return;
    }

    if(isset($_REQUEST['action']) && $_REQUEST['action'] === "Send" || $_REQUEST['action'] === "Draft"){

        extract($_REQUEST);

        $sender_id = base64_decode($_COOKIE['user_id']);

        $status = ($action === "Send") ? "2" : "1";
        
        $query = "SELECT * FROM users WHERE email = '" .$to . "'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        if ($result->num_rows) {
            $row = mysqli_fetch_array($result);
            $receiver_id = $row['user_id'];

            $query = "INSERT INTO emails (sender_id, receiver_id, subject, message, status) VALUES ('$sender_id', '$receiver_id', '$subject', '$message', '$status')";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            if ($result && $action === "Send") {

                echo "Email sent successfully";

            }else if($result && $action === "Draft"){

                echo "Email saved as draft successfully";

            }
             else {

                echo "Failed to send email";

            }

        }    
        
    }else if(isset($_REQUEST['action']) && $_REQUEST['action'] === "Trash"){

        extract($_REQUEST);

        $query = "UPDATE emails SET status = '3' WHERE email_id IN (" . implode(',', $email_ids) . ")";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        if ($result) {
            echo "Email moved to trash";
        } else {
            echo "Failed to move email to trash";
        }
    }
    else if(isset($_REQUEST['action']) && $_REQUEST['action'] === "Delete"){

        extract($_REQUEST);

        $query = "UPDATE emails SET status = '0' WHERE email_id IN (" . implode(',', $email_ids) . ")";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        if ($result) {
            echo "Email Deleted Successfully...!";
        } else {
            echo "Failed to delete email";
        }
    }else if(isset($_REQUEST['action']) && $_REQUEST['action'] === "checkEmail"){

        extract($_REQUEST);
       
        $query = "SELECT * FROM users WHERE email = '" .$email . "'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        if ($result->num_rows) {
            $row = mysqli_fetch_array($result);
            $receiver_id = $row['user_id'];

            echo "Email is valid";

        } else {

            echo "Email is not valid";
        }
    }
?>