<?php
    /* echo "<pre>";
    print_r($_POST);
    echo "</pre>"; */

    if(isset($_POST['submit'])) {
        if(isset($_POST['record'])){
            $records = $_POST['record'];
        }
    }

    if ($_POST['submit'] == "Delete Record" && isset($_POST['selected'])) {
        foreach ($_POST['selected'] as $index) {
            unset($records['id'][$index]);
            unset($records['name'][$index]);
            unset($records['father_name'][$index]);
            unset($records['surname'][$index]);
            unset($records['department'][$index]);
        }
        foreach ($records as $keys => $value_1) {
            $newArray = [];
            foreach ($value_1 as $value_2) {
                $newArray[] = $value_2;
            }
            $records[$keys] = $newArray;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
</head>
<body>
    <h1 align="center">View Records</h1>
    <hr/>
    <center>
        <form method="POST" action="edit.php">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Select</th>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Surname</th>
                <th>Department</th>
            </tr>

            <?php 
                if (isset($records)){ 
                    foreach ($records['id'] as $key => $values){            
            ?>
                    <tr>
                        <td><input type="checkbox" name="selected[]" value="<?= $key ?>"></td>
                        <td><?= $records['id'][$key] ?></td>
                        <td><?= $records['name'][$key] ?></td>
                        <td><?= $records['father_name'][$key] ?></td>
                        <td><?= $records['surname'][$key] ?></td>
                        <td><?= $records['department'][$key] ?></td>
                    </tr>
                    <input type="hidden" name="record[id][]" value="<?= $records['id'][$key] ?>">
                    <input type="hidden" name="record[name][]" value="<?= $records['name'][$key] ?>">
                    <input type="hidden" name="record[father_name][]" value="<?= $records['father_name'][$key] ?>">
                    <input type="hidden" name="record[surname][]" value="<?= $records['surname'][$key] ?>">
                    <input type="hidden" name="record[department][]" value="<?= $records['department'][$key] ?>">
                  
            <?php   } 
                }else{
            ?>
                <tr>
                    <td colspan="5" align="center">No records found.</td>
                </tr>
            <?php 
                } 
            ?>
                <tr align="center">
                    <td colspan="6" >
                        <input type="submit" name="submit" value="Edit">
                    </td>
                </tr>
        </table>
        </form>

        <form method="POST" action="">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Select</th>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Surname</th>
                <th>Department</th>
            </tr>

            <?php 
                if (isset($records)){ 
                    foreach ($records['id'] as $key => $values){            
            ?>
                    <tr>
                        <td><input type="checkbox" name="selected[]" value="<?= $key ?>"></td>
                        <td><?= $records['id'][$key] ?></td>
                        <td><?= $records['name'][$key] ?></td>
                        <td><?= $records['father_name'][$key] ?></td>
                        <td><?= $records['surname'][$key] ?></td>
                        <td><?= $records['department'][$key] ?></td>
                    </tr>
                    <input type="hidden" name="record[id][]" value="<?= $records['id'][$key] ?>">
                    <input type="hidden" name="record[name][]" value="<?= $records['name'][$key] ?>">
                    <input type="hidden" name="record[father_name][]" value="<?= $records['father_name'][$key] ?>">
                    <input type="hidden" name="record[surname][]" value="<?= $records['surname'][$key] ?>">
                    <input type="hidden" name="record[department][]" value="<?= $records['department'][$key] ?>">
                  
            <?php   } 
                }else{
            ?>
                <tr>
                    <td colspan="5" align="center">No records found.</td>
                </tr>
            <?php 
                } 
            ?>
                <tr align="center">
                    <td colspan="6" >
                        <input type="submit" name="submit" value="Delete Record">
                    </td>
                </tr>
        </table>
        </form>

        

        <form method="POST" action="regform.php">
            <?php if (isset($records['id'])) {
                foreach ($records['id'] as $key => $value) {
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
            <input type="submit" name="submit" value="Add New Record">
        </form>

        <form method="POST" action="">
            <table border="1" cellpadding="5" cellspacing="0">
               <?php if (isset($records['id'])) {
                   foreach ($records['id'] as $key => $value) {
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
                <tr>
                    <td>
                        Search :
                        <input type="number" name="search" placeholder="Search here by Id">
                        <input type="submit" name="submit" value="Search">
                    </td>
                </tr>
            </table>
        </form>
        <?php
                if (isset($_POST['submit']) && $_POST['submit'] == "Search") {
                    if (isset($_POST['search'])) {
                        $search = $_POST['search'];
                        $found = false;

                        foreach ($records['id'] as $key => $value) {
                            if ($records['id'][$key] == $search) {
                                $found = true;
        ?> 
                        <table border="1" cellpadding="5" cellspacing="0">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Surname</th>
                                <th>Department</th>
                            </tr>
                            <tr>
                                <td><?= $records['id'][$key] ?></td>
                                <td><?= $records['name'][$key] ?></td>
                                <td><?= $records['father_name'][$key] ?></td>
                                <td><?= $records['surname'][$key] ?></td>
                                <td><?= $records['department'][$key] ?></td>
                            </tr>
                        </table>
        <?php                   
                            }
                        }
                        if ($found == false) {
                            echo "Record not found.";
                        }
                    }
                }
            
        ?>

    </center>
</body>
</html>
