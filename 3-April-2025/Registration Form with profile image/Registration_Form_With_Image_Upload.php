<?php

    require_once('require/database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form With Image Upload</title>
<style>
    body {
        background-color: lightgrey;
    }
    fieldset {
        background-color: #fff;
        border: 2px solid #ccc;
        padding: 20px;
        width: 50%;
        margin: auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
    }
    td {
        padding: 10px;
    }   
    input[type="text"], input[type="email"], input[type="file"], input[type="radio"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="radio"] {
        width: auto;
    }
    input[type="submit"], input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
    }
    select {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    textarea {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    legend {
        font-size: 30px;
        font-weight: bold;
    }
    div{
        width: 50%;
        background-color: #fff;
        border: 2px solid #ccc;
        border-radius: 10px;
        padding: 20px;
    }
    </style>
</head>
<body>
    <center>
        <h1>Registration Form With Image Upload</h1>
        <hr>
        <?php
            if(isset($_GET['msg'])){

                echo "<p>".$_GET['msg']."<br></p>";
                
                if(isset($_GET['db_msg'])){
                echo "<p>".$_GET['db_msg']."</p>";
                }
            }
        ?>
        <fieldset>
            <legend>
            Registration Form....!
            </legend>
            <form method="POST" action="upload_process.php" enctype="multipart/form-data" >
                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="first_name"></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="last_name"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td>
                            <select name="country">
                                <option value="">Select Country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Upload Image:</td>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea name="address" rows="5" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phone_number"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <hr>
        
        <div>
            <h2>Search Image by ID</h2>
            <form method="POST">
                <table>
                    <tr>
                        <td>Enter Id:</td>
                        <td><input type="text" name="img_id"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" name="search" value="Search">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
            
        <?php
                if(isset($_POST['search'])){
                    $img_id = $_POST['img_id'];
                    $query = "SELECT * FROM file WHERE file_id = '$img_id'";
                    $result = mysqli_query($database_connection, $query);
            
                    if($result->num_rows > 0){
                        $row = mysqli_fetch_assoc($result);
                        $image_name = $row['name'];
                        $image_original_name = $row['original_name'];
                        $image_path = $row['path'];
                        $image_size = $row['size'];
                        $image_type = $row['type'];
                        $image_error = $row['error'];

                        echo "<h3>Image Details:</h3>";
                        echo "<p>Image ID: $img_id</p>";
                        echo "<p>Image Name: $image_name</p>";
                        echo "<p>Original Name: $image_original_name</p>";
                        echo "<p>Image Path: $image_path</p>";
                        echo "<p>Image Size: $image_size bytes</p>";
                        echo "<p>Image Type: $image_type</p>";
                        echo "<p>Image Error: $image_error</p>";
                        echo "<img src='$image_path' alt='Image' style='width: 200px; height: 200px;'>";
                        echo "<br>";
                        echo "<h3>Image found!</h3>";
                    }else{
                        echo "<h3>Image not found for ID: $img_id</h3>";
                    }
                }
        ?>
    </center>
    
</body>
</html>