<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
</head>
<body>
    <center>
        <h1>CV Generated</h1>
        <hr/>

        <h1>Personal Information</h1>
        <p><strong>Name:</strong> <?php echo $_POST["name"]; ?></p>
        <p><strong>Father's Name:</strong> <?php echo $_POST["father_name"]; ?></p>
        <p><strong>Gender:</strong> <?php echo $_POST["gender"]; ?></p>
        <p><strong>Country:</strong> <?php echo $_POST["country"]; ?></p>

        <h1>Contact Information</h1>
        <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
        <p><strong>Contact Number:</strong> <?php echo $_POST["contact_number"]; ?></p>
        <p><strong>Address:</strong> <?php echo $_POST["address"]; ?></p>

        <h1>Professional Information</h1>
        <p><strong>School:</strong> <?php echo $_POST["school_name"]." (".$_POST["school_start"]." - ".$_POST["school_end"]; ?>)</p>
        <p><strong>College:</strong> <?php echo $_POST["college_name"]." (".$_POST["college_start"]." - ".$_POST["college_end"]; ?>)</p>
        <p><strong>University:</strong> <?php echo $_POST["university"]." (".$_POST["university_start"]." - ".$_POST["university_end"]; ?>)</p>

        <h1>Summary</h1>
        <p><?php echo $_POST["summary"]; ?></p>

        <br/>
        <a href="page_1.php"><button>Go Back</button></a>
    </center>
</body>
</html>
