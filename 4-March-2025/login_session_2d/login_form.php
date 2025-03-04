<?php

    session_start();
    
    $users = array(
        "user1" => ["first_name" => "John",
                    "last_name" => "Doe", 
                    "email" => "johndoe@gmail.com",
                    "password" => "1234",
                    "address" => "HYEDERABAD",
                    "role" => "admin",
                    "status" => 0,

                ],
        "user2" => [
                "first_name" => "Jane",
                "last_name" => "Doe", 
                "email" => "janedoe@gmail.com",
                "password" => "12345",
                "address" => "HYEDERABAD",
                "role" => "admin",
                "status" => 1,
            ],
        "user3" => [
                "first_name" => "Alice",
                "last_name" => "Smith",
                "email" => "alicesmith@gmail.com",
                "password" => "123456",
                "address" => "KARACHI",
                "role" => "teacher",
                "status" => 1,
            ],
        "user4" => [
                "first_name" => "Robert",
                "last_name" => "Brown",
                "email" => "robertbrown@gmail.com",
                "password" => "1234567",
                "address" => "JAMSHORO",
                "role" => "student",
                "status" => 0,
            ],
        "user5" => [
                "first_name" => "Emily",
                "last_name" => "White",
                "email" => "emilywhite@gmail.com",
                "password" => "1234",
                "address" => "ISLAMABAD",
                "role" => "student",
                "status" => 1,
            ]
    );


    if (isset($_SESSION['users'])) {
        $user = $_SESSION['users'];
    
        if ($user['role'] == "admin") {
            header("Location: adminDashboard.php");
        } elseif ($user['role'] == "teacher") {
            header("Location: teacherDashboard.php");
        } elseif ($user['role'] == "student") {
            header("Location: studentDashboard.php");
        }
    }
    
    
    $valid = false;
    if (isset($_POST['submit'])) {

        if($_POST['email'] == '' || $_POST['password'] == ''){
                header("Location: login_form.php?msg=Fill the form first...!");
        }

        foreach ($users as $value) {
            if ($value['email'] == $_POST['email'] && $value['password'] == $_POST['password']) {
                $valid = true;
                if ($value['status'] == 1) {
                    $_SESSION['users'] = $value;

                    if ($value['role'] == "admin") {
                        header("Location: adminDashboard.php");
                    } elseif ($value['role'] == "teacher") {
                        header("Location: teacherDashboard.php");
                    } elseif ($value['role'] == "student") {
                        header("Location: studentDashboard.php");
                    }
                }else{
                    header("Location: login_form.php?msg=InActive contact Admin...!");
                }
            }
        }

        if(!$valid){
            header("Location: login_form.php?msg=Invalid Email/Password...!");
        }
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
        body{
            background-color: lightblue;

        }
        h1{
            color: blue;
        }
        fieldset{
            width: 20%;
            background-color: lightgray;
        }
        legend{
            background-color: lightblue;
        }
        table{
            width: 100%;
        }
        #btn{
            background-color: blue;
            color: white;
        }
        #btn:hover{
            background-color: green;
        }
        #msg{
            color: red;
        }

    </style>
<body>
<center>
    
    <h1>Login Form</h1>
    <hr>
    <form method="POST">
        <fieldset>
            <legend>Login Form</legend>
            <table>
                <tr align="center">
                    <td colspan="2" id="msg"><?php
                        if (isset($_GET['msg'])) {
                            echo $_GET['msg'];
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Enter your Email.."></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter your Password.."></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" id="btn" name="submit" value="Login"></td>
                </tr>
            </table>
            
        </form>
    </center>
        
    </body>
    </html>