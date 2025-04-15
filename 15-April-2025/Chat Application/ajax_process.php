<?php

    session_start();
    require_once("require/database_connection.php");

    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_messages"){
        $query = "SELECT *
                  FROM chats 
                  JOIN user ON user.user_id = chats.user_id 
                  ORDER BY chats.chat_id DESC" ;

        $result = mysqli_query($connection, $query);

        if($result->num_rows) {
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if($data['user_id'] == $_SESSION['users']['user_id']) {
                ?>
                    <div class='message-right'>
                        <img src="profile_img/<?= $data['profile_image']?>">
                        <?= "<b>".$data['first_name']." ".$data['last_name']."</b>"?>
                        <div class='message-content'>
                            <?= $data['message']?>
                        </div>
                    </div>
                <?php
                } else {
                    ?>
                    <div class='message-left'>
                        <img src="profile_img/<?= $data['profile_image']?>">
                        <?= "<b>".$data['first_name']." ".$data['last_name']."</b>"?>
                        <div class='message-content'>
                            <?= $data['message']?>
                        </div>
                    </div>
                <?php
                };
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "send_message"){
        $user_id = $_SESSION['users']['user_id'];
        $message = $_REQUEST['message'];
        $sent_time = date(time());

        if(empty($message)) {
            echo "<div class='msg' style='color: red; background-color:lightred'>Please enter a message.</div>";
            return;
        }  

        $query = "INSERT INTO chats (user_id, message, sent_on) VALUES ('".$user_id."', '".$message."','".$sent_time."')";    
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "<div class='msg' style='color:white; background-color:lightgreen'>Message sent successfully!</dic>";
        } else {
            echo "<div class='msg' style='color:red; background-color:lightred'>Error: " . mysqli_error($connection)."</div>";
        }
    }
    else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "showusers"){
        $query = "SELECT * FROM user WHERE user_id != '".$_SESSION['users']['user_id']."'";
        $result = mysqli_query($connection, $query);

        if($result->num_rows) {
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
                <div class='user'>
                    <img src="profile_img/<?= $data['profile_image'] ?>">
                    <?= $data['first_name']." ".$data['last_name'] ?>
                    <?php
                        if($data['is_online'] == 1) {
                    ?>
                        <span class='status-dot' style='background-color:green'></span>
                    <?php
                        } else {
                    ?>
                            <span class='status'>
                            <?php echo "<i>Last Seen: </i>" . date("F d, Y h:i:s A", strtotime($data['last_seen'])); ?>
                            </span>
                    <?php
                        }
                    ?>
                </div>
            <?php
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

?>