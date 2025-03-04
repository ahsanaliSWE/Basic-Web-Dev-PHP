<?php
    session_start();
    
    if(isset($_SESSION['users'])){
        if($_SESSION['users']['role'] == "teacher"){
            header("location: teacherDashboard.php");
        }elseif($_SESSION['users']['role'] == "student"){
            header("location: studentDashboard.php");
        }
    }else{
        header("location: login_form.php?msg=Please Login First...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body{
            background-color: lightblue;
        }
        h1{
            color: blue;
        }
        a{
            text-decoration: none;
            color: black;
            background-color: deepskyblue;
            border: 1px solid black;
        }
        a:hover{
            color:red;
        }
    </style>
</head>
<body>
    <center>
    <h1>Admin Dashboard</h1>
    <hr>
    <h2>Welcome... <?php echo $_SESSION['users']["first_name"]." ".$_SESSION['users']["last_name"]; ?></h2>
    <a href="logout.php">Logout</a>
        <p>First Name : <?php echo $_SESSION['users']["first_name"]."<br/>"?><p>
        <p>Last Name : <?php echo $_SESSION['users']["last_name"]."<br/>"?><p>
        <p>Email : <?php echo $_SESSION['users']["email"]."<br/>"?><p>
        <p>Password : <?php echo $_SESSION['users']["password"]."<br/>"?><p>
        <p>Address : <?php echo $_SESSION['users']["address"]."<br/>"?><p>
        <p>Role : <?php echo $_SESSION['users']["role"]."<br/>"?><p>
        <p>Status : <?php if($_SESSION['users']["status"] == 1){
                    echo "Active";
                }else{
                    echo "Inactive";
                }?>
        <p>
    </center>
</body>
</html>