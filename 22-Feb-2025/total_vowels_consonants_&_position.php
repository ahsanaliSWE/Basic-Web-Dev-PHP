<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Vowels, Consonants & Positions Of Vowels</title>
</head>
<body>
    <center>
        <br/><br/><br/><br/><br/><br/>
        <h1>Total Vowels, Consonants & Positions Of Vowels</h1>
        <p>Enter text to find Total Vowels, Consonants & Positions Of Vowels.</p>
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
                $vowels = 0;
                $consonants = 0;
                $vowelPositions = "";
                $char = "";

                for ($i = 0; isset($text[$i]); $i++) {
                    $char = $text[$i];

                    if($text[$i] != ' ') {
                        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
                            $vowels++;
                            $vowelPositions .= "Vowel $char = $i position <br/>";
                        } else {
                            $consonants++;
                        }
                    }
                }

                echo "<strong>Total Vowels: </strong> $vowels <br/>";
                echo "<strong>Total Consonants: </strong> $consonants <br/>";
                echo "<strong>Positions of Vowels:</strong> <br/>" . $vowelPositions;
            }
        ?>
    </center>
    
</body>
</html>