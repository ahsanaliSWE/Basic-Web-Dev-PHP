<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Explode Function</title>
</head>
<body>
    <h1 align="center">Custom Explode Function</h1>
    <hr/>

    <center>
        <form method="POST">
            <label>Enter String: </label>
            <input type="text" name="text" placeholder="Enter text here" value="<?= isset($_POST['text']) ? $_POST['text'] : ''?>">
            <br/><br/>
            <label>Enter Delimiter: </label>
            <input type="text" name="delimiter" placeholder="Enter delimiter here">
            <br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>

    <?php

        if(isset($_POST['submit'])) {
        $text = $_POST['text'];
        $delimiter = $_POST['delimiter'];
        $result = [];
        $temp = "";

        if ($delimiter === "") { 
            $result[] = $text;
        } else {
            for ($i = 0; isset($text[$i]); $i++) {
                if ($text[$i] == $delimiter) {
                    $result[] = $temp; 
                    $temp = ""; 
                } else {
                    $temp .= $text[$i];
                }
            }
            $result[] = $temp; 
        }

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
    
    ?>
    
</body>
</html>