<?php
require_once 'require/database_connection.php';
session_start();


    if (!isset($_SESSION['role_type_id']) || $_SESSION['role_type_id'] != 1) {
        header("Location: index.php?msg=Access Denied!&color=red");
    }

    if (!isset($_GET['user_id'])) {
        header("Location: view_logs.php?msg=Invalid User!&color=red");
    }

    $user_id = $_GET['user_id'];


    $user_query = "SELECT name FROM user WHERE user_id = ?";
    $statement = mysqli_prepare($database_connection, $user_query);
    mysqli_stmt_bind_param($statement, "i", $user_id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $user_name);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);


    $log_query = "SELECT login, logout FROM log WHERE user_id = ? ORDER BY login DESC";
    $log_stmt = mysqli_prepare($database_connection, $log_query);
    mysqli_stmt_bind_param($log_stmt, "i", $user_id);
    mysqli_stmt_execute($log_stmt);
    $log_result = mysqli_stmt_get_result($log_stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs for <?= $user_name; ?></title>
    <style>
         body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #444;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <center>
        <h2>Logs for <?= $user_name; ?></h2>
        <table>
            <tr>
                <th>Login Time</th>
                <th>Logout Time</th>
            </tr>
            <?php 
                while ($log = mysqli_fetch_assoc($log_result)) { 
            ?>
                <tr>
                    <td><?= $log['login']; ?></td>
                    <td><?= $log['logout']?></td>
                </tr>
            <?php 
            } 
            ?>
        </table>

        <a href="logs.php">Back to Logs List</a>


    </center>

    
</body>
</html>

<?php 
mysqli_stmt_close($log_stmt);
mysqli_close($database_connection);
?>
