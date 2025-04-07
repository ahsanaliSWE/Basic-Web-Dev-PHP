<?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
   
    if(isset($_REQUEST['Login'])){
        echo "Login";
    }else if(isset($_REQUEST['Signup'])){
        echo "Sign Up";
    }else if(isset($_REQUEST['ChangePassword'])){      
        echo "Change Password";
    }else if(isset($_REQUEST['ForgetPassword'])){
        echo "Forget Password";
    }
?>  
    <center>
        <a href="login.php">Login</a>
        <a href="signup.php">SignUp</a>
        <a href="forgetpassword.php">Forget Password</a>
        <a href="changepassword.php">Change Password</a>
    </center>
