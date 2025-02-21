<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Alphabat</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Count Alphabat</h1>
        <p>Enter text to count the number of 'a' or 'A' in the text.</p>
        <form action="" method="POST">
            <table>
            <tr>
                <td><strong>Enter text: </strong></td>
                <td><textarea name="text" rows="4" cols="20"><?php if(isset($_POST['text'])) echo $_POST['text']; ?></textarea></td>
                <td><input type="submit" value="Go!"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
                $count = 0;

                for($i=0; isset($text[$i]); $i++){
                    if($text[$i] == 'a' || $text[$i] == 'A'){
                        $count++;
                    }
                }
                echo "Total number of 'a' or 'A' in the text is : $count";
            }
        ?>
    </center>
    
</body>
</html>