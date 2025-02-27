<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intersection Of 2 Arrays</title>
</head>
<body>
    
    <?php
            $arr_1 = [1,2,3,4,5,6,7,8,9,10];
            $arr_2 = [1,3,5,7,9,1,3,5,7,9];
    ?>

    <center>
        <h1>Intersection Of 2 Arrays</h1>
        <hr/>
    </center>

        <?php
            echo "Array 1:<br/>";
            echo "<pre>";
            print_r($arr_1);
            echo "</pre>";
            echo "Array 2:<br/>";
            echo "<pre>";
            print_r($arr_2);
            echo "</pre>";
        ?>
        <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="submit" name="submit" value="Intersection of 2 Arrays" style ="background-color:#66D2CE"></td>
                </tr>
            </table>
        </form>
        
        </center>
        
        <?php
            if(isset($_POST['submit'])){
                
                $arr = [];

                foreach($arr_1 as $i => $val1){
                    foreach($arr_2 as $j => $val2){
                        if($arr_1[$i] == $arr_2[$j]){

                            $duplicate = false;
                            foreach ($arr as $value) {
                                if ($value == $arr_1[$i]) {
                                    $duplicate = true;
                                    break;
                                }
                            }

                            if (!$duplicate) {
                                $arr[] = $arr_1[$i];
                            }
                        }
                    }
                }
                
                echo "Array after Intersection:<br/>";
                echo "<pre>";
                print_r($arr);
                echo "</pre>";
            }
        ?>
   
    
</body>
</html>