<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear Search</title>
</head>
<body>
    
    <?php
            $arr = [120,121,122,123,124,125,126,127,128,129,130];
    
    ?>

    <center>
        <h1>Linear Search</h1>
        <hr/>
    </center>

        <?php
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        ?>
        <center>
        <form action="" method="post">
            <table>
             <tr>
                <td>Enter value to Search:
                    <input type="text" name="search">
                </td>
                <td><input type="submit" name="submit" value="Search"></td>
            </table>
        </form>
        
        <?php
            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $found = false;
                foreach($arr as $i => $value){
                    if($arr[$i] == $search){
                        echo "$arr[$i] Value found at index $i";
                        $found = true;
                        break;
                    }
                }
                if(!$found){
                    echo "Value not found";
                }
            }
        ?>

        </center>
   
    
</body>
</html>