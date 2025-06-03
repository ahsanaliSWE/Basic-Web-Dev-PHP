<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV File</title>
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
        input[type="file"] {
            padding: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        hr {
            width: 80%;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <center>
        <h1>Upload CSV File</h1>
        <hr>
        <br>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Select CSV File:</th>
                    <td>
                        <input type="file" name="csv_file">
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" value="Upload CSV" name="upload_csv">
                    </td>
                </tr>
            </table>
        </form>
        <hr>
        <?php
            if(isset($_GET['msg'])) {
                echo "<h3 style='color:green;'>".$_GET['msg']."</h3>";
            }
        ?>
    </center>
    
</body>
</html>