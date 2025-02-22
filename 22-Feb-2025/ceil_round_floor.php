<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceil, Round, Floor</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Ceil, Round, Floor</h1>
        <p>Ceil, Round, Floor</p>
        <form action="" method="POST">
            <table border="1" cellpadding="10" cellspacing="10">
            <tr>
                <td><strong>Enter Decimal No: </strong></td>
                <td><input type="text" name="num" value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>" ></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <select name="option">
                        <option value="ceil"  <?php if($_POST['option']=="ceil") echo "selected"; ?>>Ceil</option>
                        <option value="round" <?php if($_POST['option']=="round") echo "selected"; ?>>Round</option>
                        <option value="floor" <?php if($_POST['option']=="floor") echo "selected"; ?>>Floor</option>
                    </select>
                <input type="submit" value="Process"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
            if (isset($_POST['num'])) {
                $num = $_POST['num'];
                $option = $_POST['option'];
                $result = 0;
                
                if ($option == "ceil") {
                    $result = ceil($num);
                } else if ($option == "round") {
                    $result = round($num);
                } else if ($option == "floor") {
                    $result = floor($num);
                }

                echo "<strong>$num= </strong> $result <br/>";
            }
        ?>
    </center>
    
</body>
</html>