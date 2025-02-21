<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical text</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Vertical text</h1>
        <p>Enter text to convert to vertical text.</p>
        <form action="" method="POST">
            <table>
            <tr>
                <td><strong>Enter text to convert to vertical text : </strong></td>
                <td><input type="text" name="text" value="<?php if(isset($_POST['text'])) echo $_POST['text']; ?>" ></td>
                <td><input type="submit" value="Go!"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
            if (isset($_POST['text'])) {
                $text = $_POST['text'];

                for($i=0; isset($text[$i]); $i++){
                    echo $text[$i]."<br/>";
                }
            }
        ?>
    </center>
    
</body>
</html>