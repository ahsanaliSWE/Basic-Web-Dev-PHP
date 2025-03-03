<?php
    session_start();

    if(isset($_SESSION["username"])){
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        h3 {
            text-align: center;
            font-family: cursive;
        }
        p {
            text-align: center;
            font-size: 1.2em;
            font-family: cursive;
        }
        table {
            margin: auto;
            border: 2px solid yellow;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <h3>Hi, <?php echo $_SESSION["username"]; ?></h3>
    <p>You are successfully logged in.</p>

    <table>
        <tr>
            <td>
                <p>
                <strong>Username:</strong> <?php echo $_SESSION["username"]; ?> <br/> 
                <strong>Password:</strong> <?php echo $_SESSION["password"]; ?> <br/>
                </p>
            </td>
        </tr>
    
    </table>
</body>
</html>
<?php
    }else {
        header("Location: login.php?msg=Please+login+first");
    }
?>