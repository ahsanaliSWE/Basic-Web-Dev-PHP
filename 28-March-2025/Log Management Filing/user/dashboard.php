<?php

    require_once '../require/database_connection.php';

    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../index.php");
    }

    if ($_SESSION['role_type_id'] == 1) {
        header("Location: ../admin/dashboard.php");
    } 
    
    if(isset($_REQUEST['update'])){

        $new_name = $_POST['name'];
        $new_email = $_POST['email'];
        $new_password = !empty($_POST['password']);
        $user_id = $_SESSION['user_id'];


        if ($new_password) {
            $update = "UPDATE user SET name = ?, email = ?, password = ? WHERE user_id = ?";
        } else {
            $update = "UPDATE user SET name = ?, email = ? WHERE user_id = ?";
        }

        $statement = mysqli_prepare($database_connection, $update);

        if ($new_password) {
            mysqli_stmt_bind_param($statement, "sssi", $new_name, $new_email, $_POST['password'], $user_id);
        } else {
            mysqli_stmt_bind_param($statement, "ssi", $new_name, $new_email, $user_id);
        }
       
        $result = mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        if($result){
            $_SESSION['name'] = $new_name;
            $_SESSION['email'] = $new_email;
            header("Location: dashboard.php?msg=Profile Updated Successfully!&color=green"); 
        } else {
            header("Location: dashboard.php?msg=Profile Not Updated Successfully!&color=red"); 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        width: 80%;
        margin: auto;
    }
    header {
        background: #333;
        color: #fff;
        padding: 30px 0;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: white;
    }
    .box {
        background: white;
        width: 50%;
        margin: auto;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    form input, form textarea {
        width: 80%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        display: block;
        align-self: center;
    }
    form button {
        padding: 10px 20px;
        background: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        align-self: center;
        width: 100%;
    }
    form button:hover {
        background: black;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
        max-width: 200px;
    }
    th {
        background: #444;
        color: white;
    }
    tr:hover {
        background: #f1f1f1;
    }
    .pagination {
        margin-top: 10px;
        text-align: center;
    }
    .pagination a {
        padding: 5px 10px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
    }
    .pagination a:hover {
        background: #ddd;
    }
    .logout {
        float: right;
        margin-right: 20px;
    }
    .logout a {
        text-decoration: none;
        color: red;
        font-weight: bold;
        padding: 5px 10px;
    }
    .logout a:hover {
        color: darkred;
        background-color: #f4f4f4;
        padding: 5px 10px;
    }
</style>
</head>
<body>
<center>
    <header>

        <h1>Welcome <?= $_SESSION['name']; ?> to User Dashboard</h1>
        <div class="logout">
            <a href="../logout.php">Logout</a>
        </div>     
    </header>
    <div class="container">
    <h2>Update Your Information</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?= $_SESSION['name']; ?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" value="<?= $_SESSION['email']; ?>"></td>
            </tr>
            <tr>
                <td>New Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <button name="update">Update</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</center>


</body>
</html>

<?php
    mysqli_close($database_connection);
?>  
