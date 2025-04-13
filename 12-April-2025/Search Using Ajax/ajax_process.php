<?php
require_once("require/database_connection.php");

if (isset($_GET['action']) && $_GET['action'] == 'show_details') {
     $cnic = $_GET['search'];

    $query = "SELECT * FROM user WHERE cnic = '$cnic'";
    $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <table border="1" cellpadding="10" cellspacing="0" style="background-color:lightskyblue; width: 50%; margin: auto; border-collapse: collapse; border-radius: 10px;">
        <tr>
            <td colspan="2" align="center"><h3>User Details</h3></td>
        <tr>
            <td><b>Full Name:</b></td>
            <td><?= $row['name'] ?></td>
        </tr>
        <tr>
            <td><b>CNIC:</b></td>
            <td><?= $row['cnic'] ?></td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><?= $row['email'] ?></td>
        </tr>
        <tr>
            <td><b>Phone:</b></td>
            <td><?= $row['phone'] ?></td>   
        </tr>
        <tr>
            <td><b>Image:</b></td>
            <td><img src="<?= $row['image_path'] ?>" width='150' alt='User Image'></td>
        </tr>        
    </table>
    <?php

    } else {
    ?>
        <p style='color:red;'>Record Not Found!...</p>
    <?php
    }
}
?>
