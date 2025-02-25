<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Array</title>
</head>
<body>
        <center>
            <h1>Count Array</h1>
            <hr>
            <br/><br/><br/><br/><br/>
            
            <?php
                $arr = [1,2,3,4,5,6,7,8,9,10,11];
                $count = 0;
                echo "<strong>Array: </strong>";

                /* echo "<pre>";
                  print_r($arr);
                echo "</pre>"; */

                for($i=0; isset($arr[$i]); $i++){
                    echo $arr[$i]." ";
                    $count++;
                }
                echo "<br/>Total elements in the array: $count";
            
            ?>
        </center>
    
</body>
</html>