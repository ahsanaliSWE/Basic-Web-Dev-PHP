<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if(isset($_SESSION['school_name'])){
            $name = $_SESSION['name'];
            $father_name = $_SESSION['father_name'];
            $gender = $_SESSION['gender'];
            $country = $_SESSION['country'];
            $email = $_SESSION['email'];
            $contact_number = $_SESSION['contact_number'];
            $address = $_SESSION['address'];
            $school_name = $_SESSION['school_name'];
            $school_start = $_SESSION['school_start'];
            $school_end = $_SESSION['school_end'];
            $college_name = $_SESSION['college_name'];
            $college_start = $_SESSION['college_start'];
            $college_end = $_SESSION['college_end'];
            $university = $_SESSION['university'];
            $university_start = $_SESSION['university_start'];
            $university_end = $_SESSION['university_end'];
            $summary = $_SESSION['summary'];
        }
        else{
            header("Location: page_3.php?msg=Please fill the form");
        }
    }else{
        header("Location: login.php?msg=Please login first");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <style>
        body{
            background-color: lightblue;
            font-family: cursive;
        }
        h1{
            background-color: yellow;
            border-radius: 5px;
        }
        button{
            background-color: yellow;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        button:hover{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <h1>CV Generated</h1>
        <hr/>

        <h1>Personal Information</h1>
        <p><strong>Name:</strong> <?= $name; ?></p>
        <p><strong>Father's Name:</strong> <?= $father_name ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
        <p><strong>Country:</strong> <?= $country ?></p>

        <h1>Contact Information</h1>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Contact Number:</strong> <?= $contact_number ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>

        <h1>Professional Information</h1>
        <p><strong>School:</strong> <?php echo $school_name." (".$school_start." - ".$school_end.")" ?></p>
        <p><strong>College:</strong> <?php echo $college_name." (".$college_start." - ".$college_end.")"; ?></p>
        <p><strong>University:</strong> <?php echo $university." (".$university_start." - ".$university_end.")"; ?></p>

        <h1>Summary</h1>
        <p><?= $summary; ?></p>

        <br/>
        <a href="page_1.php"><button>Go Back</button></a>
    </center>
</body>
</html>
