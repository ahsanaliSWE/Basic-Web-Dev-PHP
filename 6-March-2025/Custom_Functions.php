<?php

    // strtoupper() function
    function mystrtoupper($text){
        
        for($i = 0; isset($text[$i]); $i++){
            if($text[$i] >= 'a' && $text[$i] <= 'z'){
                $text[$i] = chr(ord($text[$i]) - 32);
            }
        }
        
        return $text;
    }

    // implode() function
    function myimplode($separator = ",", $text){
        $newText = "";
        for($i = 0; isset($text[$i]); $i++){
            $newText .= $text[$i];
            if(isset($text[$i+1])){
                $newText .= $separator;
            }
        }
        return $newText;
    }

    // explode() function
    function myexplode($separator, $text) {
        $newText = [];
        $temp = "";
    
        for ($i = 0; isset($text[$i]); $i++) {
            if ($text[$i] == $separator) {
                $newText[] = $temp; 
                $temp = ""; 
            } else {
                $temp .= $text[$i]; 
            }
        }
    
        $newText[] = $temp;
    
        return $newText;
    }

    // strlen() function
    function mystrlen($text){
        $length = 0;
        for($i = 0; isset($text[$i]); $i++){
            $length++;
        }
        
        return $length;
    }

    // strrev() function
    function mystrrev($text){
        $newText = "";
        for($i = 0; isset($text[$i]); $i++){
            $newText = $text[$i].$newText;
        }

        return $newText;
    }

    // range() function
    function myrange($start, $end, $step = 1){
        $myarr = [];

        if ($step == 0) {
            return []; 
        }

        if ($start < $end) {
            for ($i = $start; $i <= $end; $i += $step) {
                $myarr[] = $i;
            }
        } else {
            for ($i = $start; $i >= $end; $i -= $step) { 
                $myarr[] = $i;
            }
        }

        return $myarr;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Functions</title>
</head>
<body>
    <center>
        <h1> strtoupper()</h1>
        <hr />
            <?php

                $text = "Ahsan Ali";
                echo "<h2>Entered Text: $text</h2>";
                echo "<h2>Converted Text: ".mystrtoupper($text)."</h2>";
                
            ?>
        <hr />
        <h1> implode()</h1>
        <hr />
            <?php
                    $text = array("Hidaya", "Institute", "of", "Science", "and", "Technology");
                    $separator = ",";
                    echo "<h2>Entered Text: </h2>";
                    print_r($text);
                    echo "<h2>Seperator: $separator</h2>";
                    echo "<h2>Converted Text: ".myimplode($separator, $text)."</h2>";
                
            ?>
        <hr />
        <h1> explode()</h1>
        <hr />
            <?php
                    $text = "Hidaya Institute of Science and Technology";
                    $separator = " ";
                    echo "<h2>Entered Text: $text</h2>";
                    echo "<h2>Seperator: $separator</h2>";
                    $myarr = myexplode($separator, $text);
                    print_r($myarr);

            
            ?>
        <hr />
        <h1> strlen()</h1>
        <hr />
            <?php
                    $text = "Hello World";
                    echo "<h2>Text: $text</h2>";
                    echo "<h2>length: ".mystrlen($text)."<h2/>";
            ?>
        <hr />
        <h1> strrev()</h1>
        <hr />
            <?php
                    echo "<h2>Text: $text</h2>";
                    echo "<h2>Reverse: ".mystrrev($text)."<h2/>";
            ?>
        <hr />
        <h1> range()</h1>
        <hr />
            <?php
                    $start = 0;
                    $end = 10;
                    echo "<h2>Start: $start, End: $end</h2>";
                    echo "<h2>Range: <h2/>";
                    $arr = myrange($start,$end);
                    print_r($arr);
            ?>
    </center>
    
</body>
</html>