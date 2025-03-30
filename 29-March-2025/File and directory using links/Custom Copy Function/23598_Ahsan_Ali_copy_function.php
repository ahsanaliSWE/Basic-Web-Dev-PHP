<?php
    if(isset($_POST['copy'])) {
        $source_file = $_POST['source_file'];
        $target_file = $_POST['target_file'];

        if (!file_exists($source_file)) {
            header("Location: 23598_Ahsan_Ali_copy_function.php?msg=Source file does not exist&color=red");
            return;
        }

        
        function custom_copy($source, $target) {

            $target_dir = dirname($target);
    
            if (!is_dir($target_dir)) {
                mkdir($target_dir);
            }
    
            $data = file_get_contents($source);

            if ($data === false) {
                header("Location: 23598_Ahsan_Ali_copy_function.php?msg=Error reading source file&color=red");
                return;
            }

            if($data === "" && !isset($_POST['emptycheck'])) {
                header("Location: 23598_Ahsan_Ali_copy_function.php?msg=Source file is empty&color=red");
                return;
            }
    
            if (file_put_contents($target, $data) !== false) {
                header("Location: 23598_Ahsan_Ali_copy_function.php?msg=File copied successfully&color=green");
                return;
            } else {
                header("Location: 23598_Ahsan_Ali_copy_function.php?msg=Error writing to target file&color=red");
                return;
            }
        }
    
        custom_copy($source_file, $target_file);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Function</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 20px;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        legend {
            font-weight: bold;
            font-size: 1.2em;
            padding: 0 10px;
            background-color: white;
            border-radius: 5px;
            border: 1px solid lightgrey;
            margin-bottom: 10px;
        }
        legend:hover {
            background-color: #4CAF50;
            color: white;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        td {
            padding: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message{
            color: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        input[type="checkbox"]{
            width: 20px;
            height: 20px;
            accent-color: #4CAF50   
            
        }
    </style>
</head>
<body>
    <center>
        <h1>Custom Copy Function</h1>
        <p>Copy a file from one location to another.</p>
        <hr>
        <?php
            if(isset($_GET['msg']) && isset($_GET['color'])) {  
                echo "<p class='message' style=background-color:".$_GET['color'].">Message: ". $_GET['msg']. "</p>";
            }
        ?>
        <fieldset>
            <legend>
                Copy Function...!
            </legend>
            <p>Input the path for source file and target file to copy.</p>
            <form action="23598_Ahsan_Ali_copy_function.php" method="post">
                <table>
                    <tr>
                        <td><b>Source File:</b></td>
                        <td><input type="text" name="source_file"></td>
                    </tr>
                    <tr>
                        <td><b>Target File:</b></td>
                        <td><input type="text" name="target_file"></td>
                    </tr>
                    <tr>
                        <td><b>Copy Empty File...?</b></td>
                        <td><input type="checkbox" name="emptycheck"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="copy" value="Copy">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <br>
    </center>
    <p><b>Note:</b> The path is specified as relative to the current directory.<br />
            For the source file, if it is in the current directory, use only the filename (e.g., `file.txt`).<br />
            If the file is in a subfolder, use the relative path (e.g., `folder/file.txt`).</p>
    
</body>
</html>