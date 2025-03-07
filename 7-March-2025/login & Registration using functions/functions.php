<?php

    function login_form($method="GET",$action=""){

        if(isset($_REQUEST['login'])){
            echo "<h3>Form Submitted</h3>";
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";
        }
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Form</title>
        </head>
        <style>
            fieldset{
                width: 40%;
            }
            h1{
                color: blue;
            }
            body{
                font-family: cursive;
                text-align: center;
            }
            fieldset{
                background-color: lightblue;
                border: 1px solid black;
                border-radius: 10px;
                box-shadow: 5px 5px 5px grey;
            }
            legend{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
        <body>
            <center>
                <h1>Login Form</h1>
                <hr />
                <br />
                <fieldset>
                    <legend>Login Form</legend>
                <form method="<?php echo $method; ?>" action="<?php echo $action; ?>">
                    <table>
                        <tr>
                            <td>Enter Username:</td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td>Enter Password:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="Login"></td>
                    </table>
                </form>
                </fieldset>
            </center>
        </body>
        </html>
<?php
    }

    function registration_form($method="GET",$action=""){

        if(isset($_REQUEST['register'])){
            echo "<h3>Form Submitted</h3>";
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";
        }
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Form</title>
            <style>
                fieldset{
                width: 40%;
            }
            h1{
                color: blue;
            }
            body{
                font-family: cursive;
                text-align: center;
            }
            fieldset{
                background-color: lightblue;
                border: 1px solid black;
                border-radius: 10px;
                box-shadow: 5px 5px 5px grey;
            }
            legend{
                font-size: 20px;
                font-weight: bold;
            }
            </style>
        </head>
        <body>
            <center>
                <h1>Registration Form</h1>
                <hr />
                <br />
                <fieldset>
                    <legend>Registration Form</legend>
                <form method="<?php echo $method; ?>" action="<?php echo $action; ?>">
                    <table>
                        <tr>
                            <td>Enter Username:</td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td>Enter Password:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td>Enter Email:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Enter Phone:</td>
                            <td><input type="number" name="phone"></td>
                        </tr>
                        <tr>
                            <td>Enter Address:</td>
                            <td><textarea name="address"></textarea></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>
                                Male:
                                <input type="radio" name="gender" value="Male">
                                Female:
                                <input type="radio" name="gender" value="Female">
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>
                                <select name="country">
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="India">India</option>
                                    <option value="China">China</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                </select>
                            </td>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="register" value="Register"></td>
                    </table>
                </form>
                </fieldset>
            </center>
        </body>
        </html>
<?php
    }
?>
