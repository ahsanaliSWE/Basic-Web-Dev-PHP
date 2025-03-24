<?php
    require_once 'require/database_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
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

        input[type="radio"] {
            margin-right: 5px;
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
        <h1>Register Form</h1>
        <fieldset>
            <legend>Register Form....!</legend>
        <form method="POST" action="process.php">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td>
                        <select name="country">
                            <option value="">Select Country</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                            <option value="Canada">Canada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" placeholder="Phone"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" placeholder="Address"></td>
                </tr>
                <tr align="center">
                    <td colspan=2><button type="submit" name="register">Register</button></td>
                </tr>
            </table>
        </form>
        </fieldset>
    </center>
    
</body>
</html>