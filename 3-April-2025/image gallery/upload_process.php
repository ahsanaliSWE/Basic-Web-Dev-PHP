<?php
    require_once('require/database_connection.php');

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if(isset($_REQUEST['submit'])){
                
        $folder = "image";

        if(!is_dir($folder)){
            if(!mkdir($folder)){
                die("Couldn't Create Directory $folder");
            }
        }
        $path = $folder."/".$image;
        $flag = move_uploaded_file($tmp_name,$path);

        $total_files = count($_FILES['image']['name']);
        $message = "";
    
        for ($i = 0; $i < $total_files; $i++) {
    
            $original_name = $_FILES['image']['name'][$i];
            $size = $_FILES['image']['size'][$i];
            $type = $_FILES['image']['type'][$i];
            $error = $_FILES['image']['error'][$i];
            $tmp_name = $_FILES['image']['tmp_name'][$i];
    
            $image = time() . "_" . $original_name;
            $path = $folder . "/" . $image;
    
            if ($error === 0 && move_uploaded_file($tmp_name, $path)) {
                $upload_image = "INSERT INTO file (name, original_name, type, size, temp_name, error, path) 
                                 VALUES ('$image', '$original_name', '$type', '$size', '$tmp_name', '$error', '$path')";
    
                $result = mysqli_query($database_connection, $upload_image);
    
                if ($result) {
                    $message .= "Uploaded and inserted: $original_name<br>";
                } else {
                    $message .= "DB Error for $original_name: " . mysqli_error($database_connection) . "<br>";
                    unlink($path); 
                }
            } else {
                $message .= "Error uploading $original_name<br>";
            }
        }
            header("location: upload_image.php?msg=$message");
        
        }

?>