<?php
require_once('require/database_connection.php');
?>
    <h2>Sent</h2>
    <table>
        <tr>
            <td class="sidebar">
                <div class="menu">
                    <button onclick="compose()">Compose</button>
                    <button onclick="inbox()">Inbox</button>
                    <button onclick="sent()">Sent</button>
                    <button onclick="drafts()">Drafts</button>
                    <button onclick="trash()">Trash</button>
                    <a href="logout.php"><button>Logout</button></a>
                </div>
            </td>

            <td>
                    <table border="1">
                        <tr>
                            <th>Check</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                        <?php
                        $user_id = base64_decode($_COOKIE['user_id'] ?? "");
                        $query = "SELECT * FROM emails 
                                 JOIN users ON emails.receiver_id = users.user_id 
                                WHERE emails.sender_id = '$user_id' AND emails.status = '2'";
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <input type='checkbox' name="email_ids[]" id="email_ids[]" value="<?= $row['email_id'] ?>">
                                    </td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['subject'] ?></td>
                                    <td><?= $row['message'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr><td colspan='5'>No Email found.</td></tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td colspan="5" align="right">
                                <input type="submit" name="delete" value="Delete Selected" onclick="trashEmail()">
                            </td>
                        </tr>
                    </table>
            </td>
        </tr>
    </table>
