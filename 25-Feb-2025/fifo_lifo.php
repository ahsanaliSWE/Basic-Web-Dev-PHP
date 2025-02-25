<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFO & LIFO</title>
</head>
<body>
    <center>
        <h1>FIFO & LIFO</h1>
        <hr>
        <br/><br/>

        <?php
        if (isset($_POST['arr'])) {
            $arr = $_POST['arr']; 
        } else {
            $arr = ["The", "pakistani", "team", "won", "match"];
        }

        $count = 0;
        foreach ($arr as $element) {
            $count++;
        }

        if (isset($_POST['fifo']) && $count > 0) {
            for ($i = 1; $i < $count; $i++) {
                $arr[$i - 1] = $arr[$i]; 
            }
            unset($arr[$count - 1]); 
            $count--; 
        }

        if (isset($_POST['lifo']) && $count > 0) {
            unset($arr[$count - 1]);
            $count--; 
        }
        ?>

        <form method="POST">
            <strong>Current Array:</strong><br>
            <pre>
            <?php
                foreach ($arr as $value) {
                    echo $value . " ";
                }
            ?>
            </pre>
            <?php
            foreach ($arr as $value) {
                echo '<input type="hidden" name="arr[]" value="' . $value . '">';
            }
            ?>

            <br>
            <input type="submit" name="fifo" value="FIFO">
            <input type="submit" name="lifo" value="LIFO">
        </form>
    </center>
</body>
</html>
