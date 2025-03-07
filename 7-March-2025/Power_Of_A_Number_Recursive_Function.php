<?php
        function power($base, $exponent){
            if($exponent == 0){
                return 1;
            }
            else{
                return $base * power($base, $exponent-1);
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Of A Number Recursive Function</title>
</head>
<body>
    <center>
        <h1>Power Of A Number Recursive Function</h1>
        <hr />
        <br />
        <form method="POST">
            <table>
                <tr>
                    <td>Enter Base:</td>
                    <td><input type="number" name="base"></td>
                </tr>
                <tr>
                    <td>Enter Exponent:</td>
                    <td><input type="number" name="exponent"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="result" value="Result"></td>
            </table>
        </form>
        <?php
            if(isset($_POST['base']) && isset($_POST['exponent'])){
                $base = $_POST['base'];
                $exponent = $_POST['exponent'];
                
                echo "<h3>Result: ".power($base, $exponent)."</h3>";
            }
        ?> 
    </center>
</body>
</html>