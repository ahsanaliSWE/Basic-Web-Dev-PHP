<?php
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "error_handling";

    try{
        $connection = mysqli_connect($host_name, $user_name, $password, $database);
        if(!$connection){
            throw new Exception("Database Connection Failed....!");
        }
    }catch(Exception $e){
    
    ?>

        <div style="background-color: #f8d7da; color: #721c24; padding: 20px; border-radius: 5px; border: 1px solid #f5c6cb;">
            <h2>Database Connection Error</h2>
            <b>Error: </b> <?= $e->getMessage() ?><br>
            <b>Code: </b> <?= $e->getCode() ?><br>
            <b>File: </b> <?=$e->getFile() ?><br>
            <b>Line: </b> <?=$e->getLine() ?><br>
        </div>
    <?php
        $file = "error_logs.txt";
        $error_message = "Error: " . $e->getMessage() . "\n" .
                         "Code: " . $e->getCode() . "\n" .
                         "File: " . $e->getFile() . "\n" .
                         "Line: " . $e->getLine() . "\n\n".
                         "----------------------------------------\n\n";
        $resourse = fopen($file, "a+");
        fwrite($resourse, $error_message);
        fclose($resourse);
        
    }
?>
