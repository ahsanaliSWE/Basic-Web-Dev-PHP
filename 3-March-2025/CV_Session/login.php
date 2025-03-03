<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        header("Location: page_1.php");
    }
    
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "ahsan" && $password == "12345") {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: page_1.php");
            
        }elseif($username == "" && $password == ""){
            header("Location: login.php?msg=Please+fill+the+fields");
        }else {
            header("Location: login.php?msg=Invalid+Username+or+Password");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(12, 243, 243);
        }
        h1 {
            text-align: center;
            background-color: yellow;
            padding: 20px;
            font-family: cursive;
            border-radius: 10px;

        }
        fieldset {
            width: 30%;
            margin: auto;
            border: 2px solid yellow;
            border-radius: 10px;
        }
        legend {
            font-size: 1.5em;
            font-weight: bold;
            font-family: cursive;
            text-align: center; 
        }
        table {
            width: 100%;
        }
        table tr td {
            padding: 10px;
        }
        #btn{
            background-color: rgb(252, 255, 94);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            font-family: cursive;
        }
        #btn:hover {
            background-color: rgb(255, 0, 0);
            color: white;
        }
        .fields-name {
            font-weight: bold;
            font-family: cursive;
        }
        p{
            font-family: cursive;
        }
        #msg {
            color: red;
            font-weight: bold;
            font-family: cursive;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Login Page</h1>

    <p>
        Username: ahsan <br/>
        Password: 12345
    </p>

    <fieldset>
        <legend>Login</legend>
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td colspan="2" id="msg">
                        <?php
                            if(isset($_GET['msg'])) {
                                echo $_GET['msg'];
                            }
                        ?>
                    </td>
                <tr>
                    <td class="fields-name">Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td class="fields-name">Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" id="btn" value="Login"></td>
                </tr>
            </table>
        </form>
    </fieldset>
        
    
    
</body>
</html>