<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Like Trim()</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Program Like Trim()</h1>
        <p>Enter text to trim.</p>
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
                $start = 0;
                $end = 0;
                $foundEnd = false;

                for ($i = 0; isset($text[$i]); $i++) {
                    if ($text[$i] != ' ') {
                        
                        $end = $i; 

                        if (!$foundEnd) {
                            $start = $i; 
                            $foundEnd = true;
                        }
                    }
                }


                for ($i = $start; $i <= $end; $i++) {
                    $newText .= $text[$i];
                }

                echo "<strong>Text after trim: </strong>".$newText;
                
            }
        ?>
    </center>
    
</body>
</html>