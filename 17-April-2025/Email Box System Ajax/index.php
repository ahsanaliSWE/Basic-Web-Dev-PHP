<?php

    include_once('require/database_connection.php');
    
    if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['email']) || !isset($_COOKIE['password'])){
        header("location:Login_form.php?error=Please Login First...!");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Box System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(201, 201, 201);
            color: #333;
        }
        h1 {
            color: #333;
            text-align: center;
            font-size: 36px;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 50px auto;
            background-color: #f9f9f9;
            width: 80%;
        }
        td {
            padding: 8px 15px;
        }
        .sidebar {
            vertical-align: top;
            border-right: 2px solid #ccc;
            padding-right: 20px;
        }
        .menu button {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            font-weight: bold;
            width: 100%;
        }
        .menu a:hover {
            color: #007BFF;
        }
        #composeForm {
           border: 1px solid #ccc;
        }

        #composeForm input[type="text"], #composeForm textarea {
            width: 100%;
        }
        #composeForm input[type="submit"] {
            margin-top: 10px;
            padding: 6px 12px;
        }
        h3{
            color: #333;
            text-align: center;
            font-size: 24px;
            padding: 10px;
            border-radius: 5px;
            margin: 20px auto;

        }

        #sendBtn:disabled, #draftBtn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

    </style>
    <script>
        compose();

        function compose() {
            
            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("header").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "compose.php");
            ajax_request.send();
        }
        function inbox() {
            currentView = "inbox";

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("header").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "inbox.php");
            ajax_request.send();
        }
        function sent() {
            currentView = "sent";

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("header").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "sent.php");
            ajax_request.send();
        }
        function drafts() {
            currentView = "drafts";

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("header").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "drafts.php");
            ajax_request.send();
        }
        function trash() {
            currentView = "trash";

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("header").innerHTML = ajax_request.responseText;
                }
            };

            ajax_request.open("GET", "trash.php");
            ajax_request.send();
        }

        function sendEmail(){

            $to = document.getElementById("to").value;
            $subject = document.getElementById("subject").value;
            $message = document.getElementById("message").value;

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("msg").innerHTML = ajax_request.responseText;
                    compose();
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=Send&to="+$to+"&subject="+$subject+"&message="+$message);
        }

        function saveDraft(){

            $to = document.getElementById("to").value;
            $subject = document.getElementById("subject").value;
            $message = document.getElementById("message").value;

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("msg").innerHTML = ajax_request.responseText;
                    compose();
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=Draft&to="+$to+"&subject="+$subject+"&message="+$message);
        }

        function checkEmail() {
            sendBtn = document.getElementById("sendBtn");
            draftBtn = document.getElementById("draftBtn");
            email = document.getElementById("to").value;
            receiverEmail = document.getElementById("receiverEmail");

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    receiverEmail.innerHTML = ajax_request.responseText;
                    if(ajax_request.responseText == "Email is valid"){
                        sendBtn.disabled = false;
                        draftBtn.disabled = false;
                    }else{
                        sendBtn.disabled = true;
                        draftBtn.disabled = true;
                    }
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=checkEmail&email="+email);
        }

        function trashEmail(){
            var checkboxes = document.querySelectorAll('input[name="email_ids[]"]:checked');
            var email_ids = Array.from(checkboxes).map(function(checkbox) {
                return checkbox.value;
            });

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("msg").innerHTML = ajax_request.responseText;
                    if (currentView === 'inbox') inbox();
                    else if (currentView === 'sent') sent();
                    else if (currentView === 'drafts') drafts();
                    else if (currentView === 'trash') trash();
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=Trash&email_ids[]="+email_ids);
        }

        function deleteEmail(){
            var checkboxes = document.querySelectorAll('input[name="email_ids[]"]:checked');
            var email_ids = Array.from(checkboxes).map(function(checkbox) {
                return checkbox.value;
            });

            ajax_request = null;

            if (window.XMLHttpRequest) { 
                ajax_request = new XMLHttpRequest();
            } else { 
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("msg").innerHTML = ajax_request.responseText;
                    trash();
                }
            };

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=Delete&email_ids[]="+email_ids);
        }

    </script>
</head>
<body>
  
    <h1 align="center">Email System</h1>
    <hr>

    <h3 id="msg" align="center"></h3>
    <?php
        if(isset($_GET['msg']) && isset($_GET['color'])){
            echo "<h3 style='color:".$_GET['color']."'>".$_GET['msg']."</h3>";
        }else if(isset($_GET['error']) && isset($_GET['color'])){
            echo "<h3 style='color:".$_GET['color']."'>".$_GET['error']."</h3>";
        }
            
    ?>
    
    <h2>Welcome....<?= base64_decode($_COOKIE['username']??"")." (".base64_decode($_COOKIE['email']??"").")" ?></h2>
    <h2></h2>
    
    <center>
    <div id="header">
       
    </div>

    </center>
    
    
    
</body>
</html>