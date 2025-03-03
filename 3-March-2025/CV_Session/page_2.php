<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    if(isset($_SESSION['name'])){

        if(isset($_POST['submit'])){
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['contact_number'] = $_POST['contact_number'];
            $_SESSION['address'] = $_POST['address'];
            header('Location: Page_3.php');
        }
    }else{
        header('Location: Page_1.php?msg=Please fill the form');
    }
}else{
    header('Location: login.php?msg=Please login first');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Info</title>
    <style>
        body{
            background-color: lightblue;
            font-family: cursive;
        }
        h1{
            background-color: yellow;
            border-radius: 5px;
            
        }
        table{
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
        }
        #btn{
            background-color: yellow;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        #btn:hover{
            background-color: green;
            color: white;
        }
        #msg{
            color: red;
            font-weight: bold;
            font-family: cursive;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h1>Contact Info</h1>
        <hr/>
        <form method="POST">
            <table cellpadding="5" cellspacing="5">
                <tr>
                    <td colspan="2" id="msg">
                        <?php
                            if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <th>Contact Number:</th>
                    <td><input type="number" name="contact_number"></td>
                </tr>

                <tr>
                    <th>Address:</th>
                    <td> <textarea name="address" rows="5" cols="40" ></textarea></td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                        <input type="submit" id="btn" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
