<?php
    require_once('require/database_connection.php');

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if(isset($_REQUEST['submit'])){

        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $country = $_REQUEST['country'];
        $address = $_REQUEST['address'];
        $phone_number = $_REQUEST['phone_number'];
        
        $image = time()."_".$_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];
        $error = $_FILES['image']['error'];
        $filename = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $folder = "MyFiles";

        if(!is_dir($folder)){
            if(!mkdir($folder)){
                die("Couldn't Create Directory $folder");
            }
        }
        $path = $folder."/".$image;
        $flag = move_uploaded_file($tmp_name,$path);


        if($flag){
            $message = "File Uploaded on server..!";

            $upload_image = "INSERT INTO file (name, original_name, type, size, temp_name, error, path) 
                            VALUES ('$image', '$filename', '$type', '$size', '$tmp_name', '$error', '$path')";
            $result1 = mysqli_query($database_connection, $upload_image);

            if($result1) {

                $file_id = mysqli_insert_id($database_connection);

                $user_query = "INSERT INTO user (first_name, last_name, email, gender, country, address, phone_number, file_id) 
                           VALUES ('$first_name', '$last_name', '$email', '$gender', '$country', '$address', '$phone_number', '$file_id')";
                
                $result2 = mysqli_query($database_connection, $user_query);
                
                if($result2) {
                    $message .= "&db_msg=File inserted in database";
                } else {
                    $message .= "&db_msg=Error inserting data: " . mysqli_error($database_connection);
                }               
            }else{
                $message = "Something Went Wrong Try Again..!";
            }

            header("location: Registration_Form_With_Image_upload.php?msg=$message");
        
        }

    }
?>