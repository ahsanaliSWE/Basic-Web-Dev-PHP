<?php
    require_once("require/forms.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <h1 align="center">Forget Password</h1>
    <div align="center">
        <?php
            $form = new Forms;
            $form->set_action("process.php");
            $form->set_method("POST");
            $form->forgetPassword();
        ?>
    </div>
    
</body>
</html>