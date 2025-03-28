<?php

require_once("require/database_connection.php");
session_start();

    $query = "SELECT user_id, name FROM user WHERE user_id = ?";
    $statement = mysqli_prepare($database_connection, $query);
    mysqli_stmt_bind_param($statement, "i", $_SESSION['user_id']);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);

    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?msg=Login First...!.&color=red");
    }

    if ($_SESSION['role_type_id'] != 1) {

            $file = fopen("logs/$user_id"."_"."$name.txt", "a");
            fwrite($file, "Logout : ".date("Y-m-d H:i:s")."\n");
            fclose($file);
    }
    session_destroy();
    header("Location: index.php?msg=You have logged out successfully.&color=green");
    mysqli_close($database_connection);
?>
