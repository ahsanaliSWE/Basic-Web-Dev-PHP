<!DOCTYPE html>
<html>
<head>
    <title>Page 3</title>
</head>
<body>
    <center>
        <h1>Page 3</h1>
        <hr/>

        <table border="1" cellpadding="5" cellspacing="5">
            <tr>
                <th>First Name</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>

            <?php 
            if (isset($_POST["count"])) {
                $count = $_POST["count"];

                for ($i = 1; $i <= $count; $i++) {
            ?>
                <tr>
                    <td><?php echo $_POST["first_name$i"]; ?></td>
                    <td><?php echo $_POST["gender$i"]; ?></td>
                    <td><?php echo $_POST["country$i"]; ?></td>
                </tr>
            <?php
                }
            } 
            ?>
        </table>
    </center>
</body>
</html>
