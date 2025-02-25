<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Array</title>
</head>
<body>
        <center>
            <h1>Calculate Temperature</h1>
            <hr>
            <br/><br/><br/><br/><br/>
            
            <?php
                $temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
                $count = 0;
                $sum = 0;
                $highest_temp;
                $lowest_temp;

                echo "<strong>Array: </strong>";

                echo "<pre>";
                  print_r($temperature);
                echo "</pre>"; 

                for($i=0; isset($temperature[$i]); $i++){
                    $count++;
                    $sum += $temperature[$i];
                }

                $avg_temp = ($sum/$count);

                // sorted array in ascending order to get the lowest and highest temperatures
                for ($i = 0; $i < $count - 1; $i++) {
                    for ($j = 0; $j < $count - $i - 1; $j++) {
                        if ($temperature[$j] > $temperature[$j + 1]) {
                            $temp = $temperature[$j];
                            $temperature[$j] = $temperature[$j + 1];
                            $temperature[$j + 1] = $temp;
                        }
                    }
                }

                for ($i = 0; $i < 5; $i++) {
                    $lowest_temp[$i] = $temperature[$i]; 
                    $highest_temp[$i] = $temperature[$count - 1 - $i]; 
                }

                echo "<br/>Average Temperature: $avg_temp";
                echo "<br/>Five Highest Temperatures: ";
                for ($i = 0; $i < 5; $i++) {
                    echo $highest_temp[$i] . " ";
                }
                echo "<br/>Five Lowest Temperatures: ";
                for ($i = 0; $i < 5; $i++) {
                    echo $lowest_temp[$i] . " ";
                }

            
            ?>
        </center>
    
</body>
</html>