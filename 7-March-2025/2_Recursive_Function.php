<?php
    // sum of natural numbers
    function sumofNum($n) {
        if ($n == 0) {
            return 0; 
        }
        return $n + sumofNum($n - 1);
    }

    // count digits in field
    function countDigits(int $n) {
        if ($n == 0) {
            return 0;
        }
        return 1 + countDigits($n / 10);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Recursive Function</title>
</head>
<body>
    <center>
        <h1>2 Recursive Function</h1>
        <hr />
        <br />
        <h1>Sum on Natural Numbers</h1>
        <p>Enter the nth Digit to get sum in (1 + 2 + ... + n) </p>
        <form method="POST">
            <table>
                <tr>
                    <td>Enter nth digit:</td>
                    <td><input type="number" name="number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sum" value="Result"></td>
            </table>
        </form>
        <?php
            if(isset($_POST['sum'])){
                if(isset($_POST['number'])){
                    $number = $_POST['number'];
                                
                    echo "<h3>Result: ".sumofNum($number)."</h3>";
                }
            }
        ?>
        <hr />
        <h1>Count Digits</h1>
        <br />
        <form method="POST">
            <table>
                <tr>
                    <td>Enter digit to count:</td>
                    <td><input type="number" name="number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="count" value="Result"></td>
            </table>
        </form>
        <?php
            if(isset($_POST['number'])){
                if(isset($_POST['number'])){
                    $number = $_POST['number'];
                                
                    echo "<h3>Result: ".countDigits($number)."</h3>";
                }
            }
        ?>


    </center>
    
</body>
</html>