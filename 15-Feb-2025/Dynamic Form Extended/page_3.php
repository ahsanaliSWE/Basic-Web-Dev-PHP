<!DOCTYPE html>
<html>
     <head>
    	<title>Page 3</title>
     </head>
<body>
    <center>
        <h1>Dynamic Tabular Form</h1>
        <hr/>

        <form method="POST" action="page_4.php">
            <table border="1" cellpadding="5" cellspacing="5">
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Select</th>
                </tr>

                <?php 
                if (isset($_POST["count"])) {
                    $count = $_POST["count"];
                    echo '<input type="hidden" name="count" value="'.$count.'">';

                    for ($i = 1; $i <= $count; $i++) {

                        $first_name = $_POST["first_name$i"];
                        $gender = $_POST["gender$i"];
                        $country = $_POST["country$i"];

                ?>
                    <tr align="center">
                        <td><?php echo $i; ?></td>
                        <td>
                            <input type="hidden" name="first_name<?php echo $i; ?>" value="<?php echo $first_name; ?>">
                            <?php echo $first_name; ?>
                        </td>
                        <td>
                            <input type="hidden" name="gender<?php echo $i; ?>" value="<?php echo $gender; ?>">
                            <?php echo $gender; ?>
                        </td>
                        <td>
                            <input type="hidden" name="country<?php echo $i; ?>" value="<?php echo $country; ?>">
                            <?php echo $country; ?>
                        </td>
                        <td>
                            <input type="checkbox" name="selected<?php echo $i; ?>" value="<?php echo $i; ?>">
                        </td>
                    </tr>
                <?php
                    }
                }
                ?>

                <tr align="center">
                    <td colspan="5"><br/><input type="submit" name="submit" value="Update"><br/><br/></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
