<?php
    include("require/database_connection.php");

    date_default_timezone_set("Asia/Karachi");

    mysqli_report(false);
    error_reporting(0);
    error_reporting(E_ERROR);

    function custom_error_handler($error_level,$error_message,$error_file,$error_line_number){
        ?>
            <div style="background-color: yellow; color: navy; border-radius: 10px 0px 10px 0px;padding: 10px; margin: 10px;">
                <p><b>Error Level : </b><?php  echo $error_level; ?> </p>
                <p><b>Error Message: </b><?php  echo $error_message; ?></p>
                <p><b>Error File : </b><?php  echo $error_file; ?></p>
                <p><b>Error Line Number: </b><?php echo $error_line_number; ?></p>
            </div>       
        <?php

            global $connection;
            
            $error_level = htmlspecialchars($error_level);
            $error_message = htmlspecialchars($error_message);
            $error_file = htmlspecialchars($error_file);
            $error_line_number = htmlspecialchars($error_line_number);

            $error_time = date("Y-m-d h:i:s a");
            $query = ("INSERT INTO error_logs (error_level, error_message, error_file, error_line, error_time) 
                    VALUES ('$error_level', '$error_message', '$error_file','$error_line_number', '$error_time')");

            $result = mysqli_query($connection, $query);


            if($result){
                $file = "error_logs.txt";
                $resourse = fopen($file, "a+");
                fwrite($resourse, "Error Level: $error_level\n".
                        "Error Message: $error_message\n".
                        "Error File: $error_file\n".
                        "Error Line Number: $error_line_number\n".
                        "Error Time: $error_time\n\n".
                        "----------------------------------------\n\n");
                fclose($resourse);
            }
        }

    set_error_handler("custom_error_handler");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        hr {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Error Handling in PHP</h1>
    <hr>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!

    </p>
    <hr>
    <?php

        // Triggering an error
        //echo 10 + "abc";
        // trigger_error("Notice Error: ",E_USER_NOTICE);
        // trigger_error("Warning Error: ",E_USER_WARNING);
        // trigger_error("Fatal Error: ",E_USER_ERROR);

    ?>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
    </p>
    <hr>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa at eveniet placeat labore doloribus nisi provident ex nobis maxime ab, dolor atque, commodi suscipit quas, maiores quasi. Unde, exercitationem fugit!

    </p>


    
</body>
</html>