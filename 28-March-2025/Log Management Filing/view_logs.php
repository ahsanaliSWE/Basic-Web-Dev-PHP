<?php
require_once 'require/database_connection.php';
session_start();

    if (!isset($_SESSION['role_type_id']) || $_SESSION['role_type_id'] != 1) {
        header("Location: index.php?msg=Access Denied!&color=red");
    }

    if (!isset($_GET['user_id']) || !isset($_GET['name'])) {
        header("Location: view_logs.php?msg=Invalid User!&color=red");
    }

    $user_id = $_REQUEST['user_id'];
    $user_name = $_REQUEST['name'];
    $log_file = "logs/$user_id"."_"."$user_name.txt";
    $logs = [];

    if (file_exists($log_file)) {
        $file = fopen($log_file, "r");
        
        while ($line = fgets($file)) {

            $parts = explode("||", $line); 
    
                $loginParts = explode("Login :", $parts[0]);
                $login = $loginParts[1] ?? 'N/A';

                $logoutParts = explode("Logout :", $parts[1]);
                $logout = $logoutParts[1] ?? 'N/A';
        
                $logs[] = [
                    'login' => $login,
                    'logout' => $logout
                ];
        }        
    }
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
                foreach ($logs as $log) { 
            ?>
                <tr>
                    <td><?= $log['login']; ?></td>
                    <td><?= $log['logout']; ?></td>
                </tr>
            <?php 
                } 
            ?>
        </table>

        <a href="admin/dashboard.php">Back to Dashboard</a>
    </center>
</body>
</html>
