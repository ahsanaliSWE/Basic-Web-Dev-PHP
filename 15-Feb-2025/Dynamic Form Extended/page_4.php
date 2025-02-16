<!DOCTYPE html>
<html>
<head>
    <title>Page 4</title>
</head>
<body>
    <center>
        <h1>Edit Selected Records</h1>
        <hr/>

        <form method="POST" action="page_3.php">
            <table border="1" cellpadding="5" cellspacing="5">
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Gender</th>
                    <th>Country</th>
                </tr>

                <?php 
                if (isset($_POST["count"])) {
                    $count = $_POST["count"];
                    echo '<input type="hidden" name="count" value="'.$count.'">';

                    for ($i = 1; $i <= $count; $i++) {

                        $first_name = $_POST["first_name$i"];
                        $gender = $_POST["gender$i"];
                        $country = $_POST["country$i"];

                        if (isset($_POST["selected$i"])) {
                ?>
                    <tr align="center">
                        <td><?php echo $i; ?></td>
                        <td>
                            <input type="text" name="first_name<?php echo $i; ?>" value="<?php echo $first_name; ?>">
                        </td>
                        <td>
                            <input type="radio" name="gender<?php echo $i; ?>" value="Male" <?php echo ($gender == "Male") ? "checked" : ""; ?>> Male
                            <input type="radio" name="gender<?php echo $i; ?>" value="Female" <?php echo ($gender == "Female") ? "checked" : ""; ?>> Female
                        </td>
                        <td>
                            <select name="country<?php echo $i; ?>">
                                <option value="Pakistan" <?php echo ($country == "Pakistan") ? "selected" : ""; ?>>PAK</option>
                                <option value="USA" <?php echo ($country == "USA") ? "selected" : ""; ?>>USA</option>
                                <option value="India" <?php echo ($country == "India") ? "selected" : ""; ?>>IND</option>
                                <option value="Bangladesh" <?php echo ($country == "Bangladesh") ? "selected" : ""; ?>>BANG</option>
                            </select>
                        </td>
                    </tr>
                <?php
                        } else {
                            echo '<input type="hidden" name="first_name'.$i.'" value="'.$first_name.'">';
                            echo '<input type="hidden" name="gender'.$i.'" value="'.$gender.'">';
                            echo '<input type="hidden" name="country'.$i.'" value="'.$country.'">';
                        }
                    }
                }
                ?>

                <tr align="center">
                    <td colspan="4"><br/><input type="submit" name="update" value="Update"><br/><br/></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
