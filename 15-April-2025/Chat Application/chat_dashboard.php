<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .username {
            font-weight: bold;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }

        .chat-container {
            padding: 20px;
            background-color: #f4f4f4;
            height: 550px;
            width: 70%;
            overflow: auto sroll;
            border: 1px solid #ccc;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chat-container h2 {
            margin-top: 0;
            text-align: center;

        }

        #chat-messages {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
	        flex-direction: column-reverse;
	        overflow: auto;
        }
        
        
        .input-box {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .input-box input[type="text"] {
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }   

        .input-box button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .input-box button:hover {
            background-color: #45a049;
        }

        .container {
            display: flex;
            margin: 20px;
            
        }

        .msg{
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-top: 10px;
        }

        .users-container {
            width: 25%;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .users-container h2 {
            margin-top: 0;
            text-align: center;
        }
        #users-list {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .user {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #fff;
        }

        .user .info {
            display: flex;
            align-items: center;
        }

        .user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user .name {
            font-weight: bold;
        }

        .user .status {
            font-size: 12px;
            margin-left: auto;
            display: flex;
            align-items: center;
        }


        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: green;
        }

        .message-right{
            padding: 10px;
            margin: 5px 0;
            border-radius: 10px;
            background-color: #cfe2ff;
            color: #1e1e2f;
            align-self: flex-end; 
            float: none; 
            clear: both;
            width: auto;
            max-width: 75%; 
            display: flex; 
            flex-direction: row-reverse; 
            
        }
        .message-right img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .message-right .message-content {
            display: flex;
            align-items: right;
            padding: 10px;
        }

        .message-left{
            padding: 10px;
            margin: 5px 0;
            border-radius: 10px;
            background-color: #d1e7dd;
            color: #0f5132;
            align-self: flex-start; 
            float: none; 
            clear: both;
            width: auto; 
            max-width: 75%;
            display: flex;
            flex-direction: row;
        }
        .message-left img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            align-self: left;
        }
        .message-left .message-content {
            display: flex;
            align-items: left;
            padding: 10px;
        }

    </style>
    <script>
        setInterval(showMessages, 1000); 
        setInterval(showUsers, 1000);

        function showMessages() {
            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest();
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("chat-messages").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "ajax_process.php?action=show_messages");
            ajax_request.send();
        }

        function sendMessage() {        
            var message = document.getElementById("input_message").value;
            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest();
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("msg").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=send_message&message=" + message);
        }

        function clearMsg(){
            document.getElementById("msg").innerHTML = "";
        }

        function showUsers(){
            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest();
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("users-list").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "ajax_process.php?action=showusers");
            ajax_request.send();
        }

    </script>
</head>
<body>

    <div class="navbar">
        <div class="username">Welcome : <strong><?= $_SESSION['users']['first_name']." ".$_SESSION['users']['last_name'] ?></strong></div>
        <div><a href="logout.php">Logout</a></div>
    </div>

    <div class="container">
        <div class="chat-container">
            <h2>Group Chats</h2>

            <div id="chat-messages">
               
            </div>

            <div class="input-box">
                <input type="text" id="input_message" placeholder="Type a message..." onfocus="clearMsg()" />
                <button onclick="sendMessage()">Send</button>
            </div>

            <div id="msg">
          
            </div>
        </div>

        <div class="users-container">
            <h2>Users</h2>
            
            <div id="users-list">
            </div>
        </div>
    </div>
</body>
</html>
