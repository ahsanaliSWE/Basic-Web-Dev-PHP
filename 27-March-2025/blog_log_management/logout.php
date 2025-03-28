<?php

require_once("require/database_connection.php");
session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?msg=Login First...!.&color=red");
    }

    if ($_SESSION['role_type_id'] != 1) {

        $user_id = $_SESSION['user_id'];
        $logout_time = date('Y-m-d H:i:s');

        $check_query = "SELECT log_id FROM log WHERE user_id = ? AND logout IS NULL";
        $statement = mysqli_prepare($database_connection, $check_query);
        mysqli_stmt_bind_param($statement, "i", $user_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);

        if (mysqli_stmt_num_rows($statement) > 0) {

            $update_query = "UPDATE log SET logout = ? WHERE user_id = ? AND logout IS NULL";
            $update_statement = mysqli_prepare($database_connection, $update_query);
            mysqli_stmt_bind_param($update_statement, "si", $logout_time, $user_id);
            mysqli_stmt_execute($update_statement);
        } 
    }
    session_destroy();
    header("Location: index.php?msg=You have logged out successfully.&color=green");
    mysqli_close($database_connection);
?>
