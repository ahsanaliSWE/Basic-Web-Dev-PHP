<?php
    /* echo "<pre>";
    print_r($_POST);
    echo "</pre>"; */

    if(isset($_POST['submit'])) {
        if(isset($_POST['record'])){
            $records = $_POST['record'];
        }
    }

    if(isset($_POST['selected'])){
        $selectedIds = $_POST['selected'];
    }else{
        $selectedIds = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h1 align="center">Edit Records</h1>
    <hr/>
    <center>
        <form method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Surname</th>
                <th>Department</th>
            </tr>

            <?php 
                if (isset($records)){ 
                    foreach ($records['id'] as $key => $values) {    
                        $found = false;
                        foreach ($selectedIds as $selected) {
                            if ($selected == $key) {
                                $found = true;
                                break;
                            }
                        }
                        if ($found) {
                                
            ?>  
                            <tr>
                                <td><?= $records['id'][$key] ?></td>
                                <td><input type="text" name="record[name][]" value="<?= $records['name'][$key] ?>"></td>
                                <td><input type="text" name="record[father_name][]" value="<?= $records['father_name'][$key] ?>"></td>
                                <td><input type="text" name="record[surname][]" value="<?= $records['surname'][$key] ?>"></td>
                                <td>
                                    <select name="record[department][]">
                                        <option value="Computer Science" <?= $records['department'][$key] == "Computer Science" ? "selected" : "" ?>>Computer Science</option>
                                        <option value="Software Engineering" <?= $records['department'][$key] == "Software Engineering" ? "selected" : "" ?>>Software Engineering</option>
                                        <option value="Information Technology" <?= $records['department'][$key] == "Information Technology" ? "selected" : "" ?>>Information Technology</option>
                                        <option value="Telecommunication" <?= $records['department'][$key] == "Telecommunication" ? "selected" : "" ?>>Telecommunication</option>
                                    </select>
                                </td>
                            </tr>
                            <input type="hidden" name="record[id][]" value="<?= $records['id'][$key] ?>">
            <?php       
                        }else{ 
            ?>
                            <input type="hidden" name="record[id][]" value="<?= $records['id'][$key] ?>">
                            <input type="hidden" name="record[name][]" value="<?= $records['name'][$key] ?>">
                            <input type="hidden" name="record[father_name][]" value="<?= $records['father_name'][$key] ?>">
                            <input type="hidden" name="record[surname][]" value="<?= $records['surname'][$key] ?>">
                            <input type="hidden" name="record[department][]" value="<?= $records['department'][$key] ?>">
            <?php

                        } 
                    }
                }else{
            ?>  
                <tr>
                    <td colspan="5" align="center">No records found.</td>
                </tr>
            <?php 
                } 
            ?>
                <tr align="center">
                    <td colspan="6">
                        <input type="submit" name="submit" value="Update">
                    </td>
                </tr>
        </table>
        </form>

        <form method="POST" action="view.php">
        <?php 
                if (isset($records)){ 
                    foreach ($records['id'] as $key => $values){            
        ?>
                    <input type="hidden" name="record[id][]" value="<?= $records['id'][$key] ?>">
                    <input type="hidden" name="record[name][]" value="<?= $records['name'][$key] ?>">
                    <input type="hidden" name="record[father_name][]" value="<?= $records['father_name'][$key] ?>">
                    <input type="hidden" name="record[surname][]" value="<?= $records['surname'][$key] ?>">
                    <input type="hidden" name="record[department][]" value="<?= $records['department'][$key] ?>">
                  
            <?php   
                    } 
                } 
            ?>
            <input type="submit" name="submit" value="Check Records">
        </form>

    </center>
</body>
</html>
