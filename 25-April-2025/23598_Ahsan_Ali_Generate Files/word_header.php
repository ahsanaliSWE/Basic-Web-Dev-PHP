<?php

    require_once("require/database_connection.php");

   header("Content-type: application/vnd-ms-word");
   header("Content-Disposition: attachment; filename=Student_Report.doc");
   header("Cache-control: no-cache, no-store, must-revalidate");
   header("Pragma: no-cache");
   header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Export</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        h2 {
            color: #2F4F4F;
        }
    </style>
</head>
<body>
<center>
    <h2 style="color: #2F4F4F;">Student Information Report</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead style="background-color: #d3d3d3; font-weight: bold;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Batch</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($connection, $query);

            if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                ?>  
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['course'] ?></td>
                        <td><?= $row['batch'] ?></td>
                    </tr>
                <?php
                }
            } else {
                echo "<tr><td colspan='8'>No records found.</td></tr>";
            }
            ?>
            </tbody>
        </table>
</center>
</body>
</html>
