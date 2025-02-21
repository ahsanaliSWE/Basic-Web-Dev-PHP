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
        <h1>Count Alphabat, words and spaces</h1>
        <form action="" method="POST">
            <table width="32%" bgcolor="lightpink">
            <tr align="center">
                <td><h1>Write Some Thing Here</h1></td>
            </tr>
            <tr align="center">
                <td><textarea name="text" rows="10" cols="50"><?php if(isset($_POST['text'])) echo $_POST['text'];?></textarea></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Submit"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
           if (isset($_POST['text'])) {
            
            $text = $_POST['text'];
            $alphabets = 0;
            $words = 0;
            $spaces = 0;
            $inWord = false;

            for($i=0; isset($text[$i]); $i++){
                if($text[$i] == " "){
                    $spaces++;

                    if ($inWord) {
                        $words++;
                        $inWord = false;
                    }
                }else{
                    $alphabets++;
                    if (!$inWord) {                        
                        $inWord = true;
                    }

                }             
            }
            if ($inWord) {
                $words++;
            }

            echo "Total Aplhabet: $alphabets<br>";
            echo "Total Words: $words<br>";
            echo "Total Spaces: $spaces<br>";
        }
        ?>
    </center>
    
</body>
</html>