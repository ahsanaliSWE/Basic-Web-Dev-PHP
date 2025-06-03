<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Files</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        h1 {
            color: #2F4F4F;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 20px;
        }
        a:hover {
            color: #2E8B57;
        }
        hr {
            width: 80%;
            border-top: 1px solid #ccc;
        }
        center {
            margin-top: 50px;
        }
        .message {
            font-size: 18px;
            margin: 20px 0;

        }
    </style>
</head>
<body>
    <center>
        <h1>Generate Files</h1>
        <hr>
        <?php
            if(isset($_GET['msg']) && isset($_GET['file'])) {
        ?>      <h3 style='color:green;'><?= $_GET['msg'] ?> <a href="<?= $_GET['file'] ?>"> Click Here to Download!...</a></h3>
        <?php
            }
        ?>
        <br>
        <a href="excel_header.php">Excel Header</a>
        <br><br>
        <a href="word_header.php">Word Header</a>
        <br><br>
        <a href="excel_writer.php">Excel Writer</a>
        <br><br>
        <a href="generate_csv.php">Generate CSV</a>
        <br><br>
    </center>
</body>
</html>