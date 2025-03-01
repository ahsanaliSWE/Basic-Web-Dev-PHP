<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find A Number In 2D Array</title>
</head>
<body>
        <?php
        $arr = [
                21,
                22,
                    [1, 2, 3, 4, "Array 1","4"],
                23,
                24,
                    [5, 6, 7, 8, "Array 2","5"],
                25,
                26,
                    [9, 10, 11, 12, "Array 3","6"],
                27,
                28,
                    [13, 1, 15, 16, "Array 4","7"]
        ];
        ?>

    <h1 align="center">Find A Number In 2D Array</h1>
    <hr/>

    <?php
            echo "<pre>";
            print_r($arr);
            echo "</pre>";    
    ?>

    <center>
        <form method="POST">
            <label>Enter An integer Number: </label>
            <input type="number" name="num" placeholder="Enter number here" value="<?= isset($_POST['num']) ? $_POST['num'] : ''?>">
            <br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
   
         
    <?php

        if(isset($_POST['submit'])) {
            $num = $_POST['num'];
            $count = 0;
            $result; // array to store the result for multiple same values

                foreach ($arr as $key1 => $value_1) {
                        if(is_array($value_1)){
                            foreach ($value_1 as $key2 => $value_2) {
                                if(is_integer($value_2)) {
                                    $count++;
                                
                                    if ($value_2 == $num ) {
                                        $result[] = "Number $num found at index [$key1][$key2]";
                                    }
                                }
                            }
                        }else{
                            if(is_integer($value_1)) {
                                $count++;
                           
                                if ($value_1 == $num) {
                                    $result[] = "Number $num found at index [$key1]";
                                }
                            }
                        }
                }

            if (isset($result)) {
                /* echo "<pre>";
                print_r($result);
                echo "</pre>"; */
                foreach ($result as $value) {
                    echo "<h2>$value</h2>";
                }
                echo "<h2>Total Number of integers in the entire array: $count</h2>";
               
            } else {
                echo "<h2>Number not found in the array</h2>";
                echo "<h2>Total Number of integers in the entire array: $count</h2>";
            }
            
    }
    
    ?>
     </center>
    
</body>
</html>