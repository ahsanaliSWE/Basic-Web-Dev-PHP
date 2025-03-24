<?php
if (isset($_GET['msg'])) {
    echo "<p style='color: green; font-weight: bold;'>" .$_GET['msg']. "</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: cursive;
            background-color: #f4f4f4;
        }
        
        center {
            margin-top: 50px;
        }

        fieldset {
            width: 40%;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
        }

        table {
            width: 100%;
        }

        td {
            font-size: 16px;
            padding: 10px;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"], 
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<center>
        <h1>Login Form</h1>
        <fieldset>
            <legend>Login Form....!</legend>
        <form method="POST" action="process.php">
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr align="center">
                    <td colspan=2><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
        </fieldset>
    </center>
    
</body>
</html>
