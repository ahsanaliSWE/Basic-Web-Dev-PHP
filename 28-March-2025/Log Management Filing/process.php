<?php
    
    require_once 'require/database_connection.php';

    session_start();


    if (!$database_connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
        
                $query = "INSERT INTO user (name, email, password, gender) VALUES (?, ?, ?, ?)";

                $statement = mysqli_prepare($database_connection, $query);
        
                mysqli_stmt_bind_param($statement, "ssss", $name, $email, $password, $gender);

        	    $result = mysqli_stmt_execute($statement);

        
                if(isset($name) && isset($email) && isset($password) && isset($gender)) {
                    if($result){
                        header("Location: index.php?msg=Registration Sucessfull Please Login....!&color=green"); 
        	        } else{
                        header("Location: register.php?msg=Record Not Inserted Successfully!..&color=red"); 
        	        	echo "<p>Error No: ".mysqli_stmt_errno($statement)."</p>";
        	        	echo "<p>Error Message: ".mysqli_stmt_error($statement)."</p>";
                    }
                }
        }

            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $query = "SELECT user_id, name, email, password, role_type_id FROM user WHERE email = ? AND password = ?";
            
                $statement = mysqli_prepare($database_connection, $query);

                mysqli_stmt_bind_param($statement, "ss", $email, $password);
            
                mysqli_stmt_execute($statement);
            
                mysqli_stmt_bind_result($statement, $user_id, $name, $email, $password, $role_type_id);
            
                $result = mysqli_stmt_fetch($statement);
                mysqli_stmt_close($statement);

                if($role_type_id ==2){

                    $file = fopen("logs/$user_id"."_"."$name.txt", "a");
                    fwrite($file, "Login : ".date("Y-m-d H:i:s")." || ");
                    fclose($file);
                }
            
            
                if ($result) {
                
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['role_type_id'] = $role_type_id;


                    if($role_type_id == 1){
                        header("Location: admin/dashboard.php"); 
                    } else if($role_type_id == 2){
                        header("Location: user/dashboard.php"); 
                    } 
                } else {
                    header("Location: index.php?msg=Invalid email or password....!&color=red"); 
                }
            
            }
 ?>
