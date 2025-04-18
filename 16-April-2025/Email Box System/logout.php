<?php
    include_once('require/database_connection.php');

    header("location:Login_form.php?msg=Logout Successfully...!");
    setcookie("user_id",base64_encode(""),time()-(60*30),"/","localhost",true,true);
    setcookie("email",base64_encode(""),time()-(60*30),"/","localhost",true,true);
    setcookie("password",base64_encode(""),time()-(60*30),"/","localhost",true,true);
?>