<?php
require_once 'require/database_connection.php';
session_start();

if (!isset($_SESSION['role_type_id']) || $_SESSION['role_type_id'] != 1) {
    header("Location: index.php?msg=Access Denied!&color=red");
}

$editors_query = "SELECT user_id, name FROM user WHERE role_type_id = 2";
$editors_result = mysqli_query($database_connection, $editors_query);

$users_query = "SELECT user_id, name FROM user WHERE role_type_id = 3";
$users_result = mysqli_query($database_connection, $users_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Logs</title>
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

        <h2>Editor Logs</h2>
        <table>
            <tr>
                <th>Editor Name</th>
                <th>Action</th>
            </tr>
            <?php 
            while ($editor = mysqli_fetch_assoc($editors_result)) { 
                ?>
            <tr>
                <td><?= $editor['name']; ?></td>
                <td><a href="view_logs.php?user_id=<?= $editor['user_id']; ?>">View Logs</a></td>
            </tr>
            <?php 
            } 
            ?>
    </table>
    
    <h2>User Logs</h2>
    <table>
        <tr>
            <th>User Name</th>
            <th>Action</th>
        </tr>
        <?php 
        while ($user = mysqli_fetch_assoc($users_result)) { 
            ?>
            <tr>
                <td><?= $user['name']; ?></td>
                <td><a href="view_logs.php?user_id=<?= $user['user_id']; ?>">View Logs</a></td>
            </tr>
            <?php 
        } 
        ?>
    </table>
    </center>
    
</body>
</html>

<?php 
    mysqli_close($database_connection); 
?>
