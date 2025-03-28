<?php

    require_once 'require/database_connection.php';

        session_start();
        
        if(isset($_SESSION['user_id'])){
            if($_SESSION['role_type_id'] == 1){
                header("Location: admin/dashboard.php"); 
            } else if($_SESSION['role_type_id'] == 2){
                header("Location: editor/dashboard.php"); 
            } else if($_SESSION['role_type_id'] == 3){
            header("Location: user/dashboard.php"); 
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        fieldset
        {
            width: 50%;
            border: 1px solid black;
            border-radius: 5px;
        }
        legend
        {
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }
        table
        {
            width: 100%;
        }
        input[type="email"], input[type="password"]
        {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid black;
        }
        input[type="submit"]
        {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid black;
            background-color: blue;
            color: white;
        }
        input[type="submit"]:hover
        {
            background-color: green;
        }
    </style>
</head>
<body>
    <center>
        <h1>Login Form</h1>
        <hr />
        <?php
            if(isset($_GET['msg']) && isset($_GET['color'])){
                echo "<p style='color:".$_GET['color']."'>".$_GET['msg']."</p>";
            }
        ?>
        <br />
        <br />

        <fieldset>
            <legend>
                Login Form....!
            </legend>
            <form method="POST" action="process.php">
                <table>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <hr />
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <p>Don't have an account <a href="register.php">Click Here</a> to Register account...!</p>
    </center>
    
</body>
</html>