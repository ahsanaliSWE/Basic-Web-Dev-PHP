<?php
require_once('require/database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inbox</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 50px auto;
            background-color: #f9f9f9;
        }
        td, th {
            padding: 8px 15px;
            text-align: left;
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
        h3 {
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

<h2>Welcome....<?= base64_decode($_COOKIE['email'] ?? "") ?></h2>

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
                <form class="form" action="delete.php" method="POST">
                    <table border="1">
                        <tr>
                            <th>Check</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                        <?php
                        $user_id = base64_decode($_COOKIE['user_id'] ?? "");
                        $query = "SELECT * FROM emails WHERE sender_id = '$user_id' AND status = 'sent'";
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <input type='checkbox' name="email_ids[]" value="<?= $row['email_id'] ?>">
                                    </td>
                                    <td><?= $row['subject'] ?></td>
                                    <td><?= $row['message'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr><td colspan='4'>No drafts found.</td></tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td colspan="4" align="right">
                                <input type="submit" name="delete" value="Delete Selected">
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
