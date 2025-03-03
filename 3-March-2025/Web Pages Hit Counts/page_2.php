<?php
session_start();
isset($_SESSION['page_2'])? $_SESSION['page_2']++: $_SESSION['page_2']=1;

/* echo "<pre>";
print_r($_SESSION);
echo "</pre>"; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <style>
        body{
            font-family: Arial;
        }
        a{
            color: black;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body>
    <center>
            
            <h1>Page 2</h1>
            <br />
            <hr />
            <br />
            <a href="page_1.php">Page 1</a>
            <br /><br />
            <a href="page_3.php">Page 3</a>
            <br /><br />
            <a href="page_4.php">Page 4</a>
            <br /><br />
            <a href="page_5.php">Page 5</a>
            <br /><br />
            <a href="page_6.php">Page 6</a>
    </center>
    
</body>
</html>