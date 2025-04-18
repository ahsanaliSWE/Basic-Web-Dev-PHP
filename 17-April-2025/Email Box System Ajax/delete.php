<?php
include_once('require/database_connection.php');

if (isset($_REQUEST['delete']) && isset($_REQUEST['email_ids'])) {

    $email_ids = $_REQUEST['email_ids'];

    foreach ($email_ids as $email_id) {
        
        $email_id = mysqli_real_escape_string($connection, $email_id);
        $query = "UPDATE emails SET status = 'trash' WHERE email_id = '$email_id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    }

    header("location:trash.php?msg=Email(s) moved to trash successfully...!&color=green");

} else {
    header("location:Login_form.php?msg=Invalid Request...!");
}
?>
