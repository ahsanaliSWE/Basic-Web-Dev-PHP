<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape From Text</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Escape From Text</h1>
        <p>Enter text and escape 'a' or 'A' from the text.</p>
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


            for($i=0; isset($text[$i]); $i++){
                if($text[$i] == 'a' || $text[$i] == 'A'){
                    continue;
                }
                    $newText .= $text[$i];
            }
            echo "Text after escape 'a' or 'A' in the text is : $newText";
        }
        ?>
    </center>
    
</body>
</html>