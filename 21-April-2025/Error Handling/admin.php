<?php
    require_once("require/database_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            padding: 10px;
            text-align: center;
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <center>

        <h1>Admin Panel</h1>
        <hr>
        <h2>Logs</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Error Level</th>
                <th>Error Message</th>
                <th>Error File</th>
                <th>Error Line Number</th>
                <th>Error Time</th>
            </tr>

            <?php
                $query = "SELECT * FROM error_logs ORDER BY error_time DESC";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                ?>  <tr>
                        <td> <?= $row['error_level'] ?></td>
                        <td> <?= $row['error_message'] ?></td>
                        <td> <?= $row['error_file'] ?></td>
                        <td> <?= $row['error_line'] ?></td>
                        <td> <?= $row['error_time'] ?></td>
                    </tr>
                <?php
                }
            ?>

    </center>
   
 
    
</body>
</html>