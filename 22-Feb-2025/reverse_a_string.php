<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse A String</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Reverse A String</h1>
        <p>Reverse A String</p>
        <form action="" method="POST">
            <table>
            <tr>
                <td><strong>Enter text: </strong></td>
                <td><input type="text" name="text" value="<?php if(isset($_POST['text'])) echo $_POST['text']; ?>" ></td>
                <td><input type="submit" value="Go!"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
                $newText = "";
                
                for ($i = 0; isset($text[$i]); $i++) {
                    $newText = $text[$i] . $newText;
                }

                echo "<strong>After Reverse: </strong> $newText <br/>";
            }
        ?>
    </center>
    
</body>
</html>