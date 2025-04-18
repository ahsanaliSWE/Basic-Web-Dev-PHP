<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 50px auto;
            background-color: #f9f9f9;
        }
        td {
            padding: 8px 15px;
        }
        .sidebar {
            vertical-align: top;
            border-right: 2px solid #ccc;
            padding-right: 20px;
        }
        .menu a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            font-weight: bold;
        }
        .menu a:hover {
            color: #007BFF;
        }
        .form {
           border: 1px solid #ccc;
        }

        .form input[type="text"], .form textarea {
            width: 100%;
        }
        .form input[type="submit"] {
            margin-top: 10px;
            padding: 6px 12px;
        }
        h3{
            color: #333;
            text-align: center;
            font-size: 24px;
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
  
    <h1 align="center">Email System</h1>
    <hr>
    <?php
        if(isset($_GET['msg']) && isset($_GET['color'])){
            echo "<h3 style='color:".$_GET['color']."'>".$_GET['msg']."</h3>";
        }else if(isset($_GET['error']) && isset($_GET['color'])){
            echo "<h3 style='color:".$_GET['color']."'>".$_GET['error']."</h3>";
        }
            
    ?>
    
    <h2>Welcome....<?= base64_decode($_COOKIE['email']??"") ?></h2>
    
    <center>
    <table>
        <tr>
            <td class="sidebar">
                <div class="menu">
                    <a href="dashboard.php">Dashboard</a>
                    <a href="compose.php">Compose</a>
                    <a href="inbox.php">Inbox</a>
                    <a href="sent.php">Sent</a>
                    <a href="drafts.php">Drafts</a>
                    <a href="trash.php">Trash</a>
                    <a href="logout.php">Logout</a>
                </div>
            </td>

            <td>
                <form class="form" action="send_email.php" method="POST">
                    <table>
                        <tr>
                            <td><b>To:</b></td>
                            <td><input type="text" name="to"></td>
                        </tr>
                        <tr>
                            <td><b>Subject:</b></td>
                            <td><input type="text" name="subject"></td>
                        </tr>
                        <tr>
                            <td><b>CC:</b></td>
                            <td><input type="text" name="cc"></td>
                        </tr>
                        <tr>
                            <td><b>Message:</b></td>
                            <td><textarea name="message" rows="10" cols="40"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="action" value="Send">
                                <input type="submit" name="action" value="Save as Draft">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>

    </center>
    
    
    
</body>
</html>