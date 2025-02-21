<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Case Converter</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>String Case Converter</h1>
        <p>Enter text to convert Uppercase to Lowercase and Lowercase to Uppercase.</p>
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
            $convertedText = "";

            for ($i = 0; isset($text[$i]); $i++) {
                $char = $text[$i];
                $newChar = $char; 
                
                // Convert Uppercase (A-Z) to Lowercase (a-z)
                if ($char >= 'A' && $char <= 'Z') {
                    $lowercase = 'a';
                    $uppercase = 'A';
                    
                    while ($uppercase != $char) {
                        $uppercase++;
                        $lowercase++;
                    }
                    $newChar = $lowercase;
                }
                // Convert Lowercase (a-z) to Uppercase (A-Z)
                elseif ($char >= 'a' && $char <= 'z') {
                    $lowercase = 'a';
                    $uppercase = 'A';

                    while ($lowercase != $char) {
                        $uppercase++;
                        $lowercase++;
                    }
                    $newChar = $uppercase;
                }

                $convertedText .= $newChar;
            }

            echo "Converted Text: $convertedText";
        }
        ?>
    </center>
    
</body>
</html>