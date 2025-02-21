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
        <h1>Find and Replace an Alphabat</h1>
        <form action="" method="POST">
            <table width="32%" bgcolor="lightpink">
            <tr>
                <td><strong>Find: </strong>
                <input type="text" name="find" value="<?php if(isset($_POST['find'])) echo $_POST['find']; ?>" >
                </td>
                <td><strong>Replace: </strong>
                <input type="text" name="replace" value="<?php if(isset($_POST['replace'])) echo $_POST['replace']; ?>" >
                </td>
            </tr>
            <tr align="center">
                <td colspan="2"><textarea name="text" rows="10" cols="50"><?php if(isset($_POST['text'])) echo $_POST['text']; ?> </textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
            </table>
        </form>
        <br/>
        <?php
           if (isset($_POST['text']) && isset($_POST['find']) && isset($_POST['replace'])) {
            $find = $_POST['find'];
            $replace = $_POST['replace'];
            $text = $_POST['text'];
            $newText = "";

            for($i=0; isset($text[$i]); $i++){
                if($text[$i] == $find){
                    $newText .= $replace;
                } else {
                    $newText .= $text[$i];
                }
            }
            echo "Text after replacing $find with $replace: $newText";
        }
        ?>
    </center>
    
</body>
</html>