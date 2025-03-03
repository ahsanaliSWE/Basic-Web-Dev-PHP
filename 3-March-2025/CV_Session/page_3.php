<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    if(isset($_SESSION['name'])){
        if(isset($_SESSION['email'])){
            if(isset($_POST['submit'])){
                $_SESSION['school_name'] = $_POST['school_name'];
                $_SESSION['school_start'] = $_POST['school_start'];
                $_SESSION['school_end'] = $_POST['school_end'];
                $_SESSION['college_name'] = $_POST['college_name'];
                $_SESSION['college_start'] = $_POST['college_start'];
                $_SESSION['college_end'] = $_POST['college_end'];
                $_SESSION['university'] = $_POST['university'];
                $_SESSION['university_start'] = $_POST['university_start'];
                $_SESSION['university_end'] = $_POST['university_end'];
                $_SESSION['summary'] = $_POST['summary'];
                header('Location: page_4.php');
            }
        }else{
            header('Location: page_2.php?msg=Please fill the contact info first');
        }
    }else{
        header('Location: page_1.php?msg=Please fill the basic info first');
    }
}else{
    header('Location: login.php?msg=Please login first');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Professional Info</title>
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
        <h1>Professional Info</h1>
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
                    <th>School Name:</th>
                    <td><input type="text" name="school_name"></td>
                </tr>

		<tr>
                    <th>School Duration:</th>
                    <td>
                        From <input type="date" name="school_start">
                        To <input type="date" name="school_end">
                    </td>
                </tr>

                <tr>
                    <th>College Name:</th>
                    <td><input type="text" name="college_name"></td>
                </tr>

		<tr>
                    <th>College Duration:</th>
                    <td>
                        From <input type="date" name="college_start">
                        To <input type="date" name="college_end">
                    </td>
                </tr>

                <tr>
                    <th>University Name:</th>
                    <td><input type="text" name="university"></td>
                </tr>

		<tr>
                    <th>University Duration:</th>
                    <td>
                        From <input type="date" name="university_start">
                        To <input type="date" name="university_end">
                    </td>
                </tr>

		<tr>
                    <th>Professional Summary:</th>
                    <td>
                        <textarea name="summary" rows="5" cols="40"></textarea>
                    </td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                    </td>
               </tr>
            </table>
        </form>
    </center>
</body>
</html>
