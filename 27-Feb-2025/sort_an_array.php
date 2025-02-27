<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort An Array Ascending</title>
</head>
<body>
    
    <?php
            $arr = [3,5,8,21,1,8,5];
    
    ?>

    <center>
        <h1>Sort An Array Ascending</h1>
        <hr/>
    </center>

        <?php
            echo "Unsorted Array:<br/>";
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        ?>
        <center>
        <form action="" method="post">
            <table>
                <tr>
                <td><input type="submit" name="submit" value="Sort An Array" style ="background-color:#66D2CE"></td>
                </tr>
            </table>
        </form>
        
        </center>
        
        <?php
            if(isset($_POST['submit'])){
                
                $count = 0;
                foreach($arr as $i => $value){
                    $count++;
                }
                
                for ($i = 0; $i < $count - 1; $i++) {
                    for ($j = 0; $j < $count - $i - 1; $j++) {
                        if ($arr[$j] > $arr[$j + 1]) {
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                        }
                    }
                }

                echo "Sorted Array:<br/>";
                echo "<pre>";
                print_r($arr);
                echo "</pre>";
            }
        ?>
   
    
</body>
</html>