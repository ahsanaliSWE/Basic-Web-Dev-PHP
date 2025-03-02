<?php

    if(isset($_POST['submit'])) {
        extract($_POST);
                   
        if (isset($_POST['record'])) {
            $records = $_POST['record'];
        };
            
        if ($_POST['submit'] == "Add") {
            $records['id'][] = $_POST['id'];
            $records['name'][] = $_POST['name'];
            $records['father_name'][] = $_POST['father_name'];
            $records['surname'][] = $_POST['surname'];
            $records['department'][] = $_POST['department'];
        }
    }

   /*  echo "<pre>";
    print_r($_POST);
    echo "</pre>"; */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regform</title>
</head>
<body>
    <h1 align="center">Registration Form</h1>
    <hr/>
    <center>
        <form method="POST">
            <table border="0" cellpadding="5" cellspacing="0">
                <tr>
                    <td>ID: </td>
                    <td><input type="number" name="id" value="<?= rand(2000,3000)?>" readonly style="background-color:#BCCCDC"></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" placeholder="Enter name here" value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>"></td>
                </tr>
                <tr>
                    <td>Father Name: </td>
                    <td><input type="text" name="father_name" placeholder="Enter Father name" value="<?= isset($_POST['father_name']) ? $_POST['father_name'] : ''?>"></td>
                </tr>
                <tr>
                    <td>Surname: </td>
                    <td><input type="text" name="surname" placeholder="Enter Surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : ''?>"></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <select name="department">
                            <option value="Computer Science" <?= isset($_POST['department']) && $_POST['department'] == "Computer Science" ? "selected" : '';?>>Computer System</option>
                            <option value="Software Engineering" <?= isset($_POST['department']) && $_POST['department'] == "Software Engineering" ? "selected" : '';?>>Software Engineering</option>
                            <option value="Information Technology" <?= isset($_POST['department']) && $_POST['department'] == "Information Technology" ? "selected" : '';?>>Information Technology</option>
                            <option value="Telecommunication" <?= isset($_POST['department']) && $_POST['department'] == "Telecommunication" ? "selected" : '';?>>Telecommunication</option>
                        </select>
                    </td>
                </tr>
            <?php 
                if (isset($records)) {
                    foreach ($records as $key => $values){ 
                        foreach ($values as $index => $value){ 
            ?>
                            <input type="hidden" name="record[<?= $key ?>][]" value="<?= $value ?>">
            <?php 
                        } 
                    }
                } 
            ?>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add">
                    </td>
                </tr>
            </table>
        </form>

        <form method="POST" action="view.php">
            <input type="submit" name="submit" value="Check Record">
            <?php 
                if (isset($records)) {
                    foreach ($records as $key => $values){ 
                        foreach ($values as $index => $value){ 
            ?>
                            <input type="hidden" name="record[<?= $key ?>][]" value="<?= $value ?>">
            <?php 
                        } 
                    }
                } 
            ?>
        </form>
    </center>
    
</body>
</html>