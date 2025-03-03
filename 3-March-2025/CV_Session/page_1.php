<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    if(isset($_POST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['father_name'] = $_POST['father_name'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['country'] = $_POST['country'];
        header('Location: Page_2.php');
    }
}else{
    header('Location: login.php?msg=Please login first');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
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
        <h1>Personal Information</h1>
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
                    <th>Name:</th>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" name="father_name"></td>
                </tr>

                <tr>
                    <th>Gender:</th>
                    <td>
                        Male <input type="radio" name="gender" value="Male"> 
                        Female <input type="radio" name="gender" value="Female">
                    </td>
                </tr>

                <tr>
                    <th>Country:</th>
                    <td>
                        <select name="country">
                            <option value="">--Select Country--</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                        </select>
                    </td>
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
