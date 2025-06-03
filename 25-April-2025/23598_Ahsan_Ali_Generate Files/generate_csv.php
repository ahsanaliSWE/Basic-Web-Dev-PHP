<?php
    require_once("require/database_connection.php");

    $file_resource = fopen("files/Student_Report.csv", "w");

    $col_heading = array("ID","NAME","EMAIL","PHONE","COURSE","BATCH");
    fputcsv($file_resource, $col_heading);

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($file_resource, $row);
        }
        header("location: index.php?msg=CSV File Created Successfully&file=files/Student_Report.csv");
    }
    
    fclose($file_resource);


    
?>