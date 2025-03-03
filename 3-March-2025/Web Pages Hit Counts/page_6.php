<?php
session_start();

/* echo "<pre>";
print_r($_SESSION);
echo "</pre>"; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 6</title>
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
        p{
            text-decoration: underline;
        }
        p:hover{
            color: red;
        }
    </style>
</head>
<body>
    <center>
            
            <h1>Page 6</h1>
            <br />
            <hr />
            <p>Page 1 Visits = <?= isset($_SESSION['page_1'])? $_SESSION['page_1']: 0 ?></p>
            <p>Page 2 Visits = <?= isset($_SESSION['page_2'])? $_SESSION['page_2']: 0  ?></p>
            <p>Page 3 Visits = <?= isset($_SESSION['page_3'])? $_SESSION['page_3']: 0  ?></p>
            <p>Page 4 Visits = <?= isset($_SESSION['page_4'])? $_SESSION['page_4']: 0  ?></p>
            <p>Page 5 Visits = <?= isset($_SESSION['page_5'])? $_SESSION['page_5']: 0  ?></p>
            <br />
            <a href="page_1.php">Page 1</a>
            <br /><br />
            <a href="page_2.php">Page 2</a>
            <br /><br />
            <a href="page_3.php">Page 3</a>
            <br /><br />
            <a href="page_4.php">Page 4</a>
            <br /><br />
            <a href="page_5.php">Page 5</a>
    </center>
    
</body>
</html>