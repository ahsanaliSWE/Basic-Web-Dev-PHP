<?php
    require_once("require/database_connection.php");


    if(isset($_REQUEST['upload_csv']) && isset($_FILES['csv_file'])) {
        $file_name = $_FILES['csv_file']['name'];
        $file_tmp = $_FILES['csv_file']['tmp_name'];
        $file_type = $_FILES['csv_file']['type'];
        $file_size = $_FILES['csv_file']['size'];

        $data_array = [];

        if($file_type == "text/csv" ) {
            
            if(!dir("uploads")) {
                mkdir("uploads");
            }
                move_uploaded_file($file_tmp, "uploads/".$file_name);
                $file_resource = fopen("uploads/".$file_name, "r");

                while($data = fgetcsv($file_resource)) {
                    $data_array[] = $data;

                    $query = "INSERT INTO users VALUES 
                            ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."')";

                    $result = mysqli_query($connection, $query);
                }
           
                fclose($file_resource);

        } else {
            header("Location: index.php?msg=Invalid file type! Please upload a CSV file.");
            exit;
        }

    } else {
        header("Location: index.php?msg=Please select a file to upload.");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        h1 {
            color: #2F4F4F;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        hr {
            width: 80%;
            border-top: 1px solid #ccc;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Uploaded CSV File Data</h1>
        <hr>
        <br>
        <table border="1" cellpadding="10" cellspacing="5">
            <?php
                foreach($data_array as $row) {
                    echo "<tr>";
                    foreach($row as $data) {
                        echo "<td>".$data."</td>";
                    }
                    echo "</tr>";
                }
            ?>
            <tr align="center">
                <td colspan="6" >
                    <a href="uploads/Student_Report.csv">Export CSV</a>
                </td>
            </tr>
        </table>

    </center>
    
</body>
</html>