<?php
    require_once('require/database_connection.php');

    if(isset($_REQUEST['search']) && $_REQUEST['search'] != "") {
        
        $search = $_REQUEST['search'];
        $query = "SELECT * FROM php_topics WHERE title LIKE '%$search%' OR url LIKE '%$search%' OR description LIKE '%$search%'";
        
        $result = mysqli_query($connection, $query);
        
        if($result->num_rows) {

            while($data = mysqli_fetch_assoc($result)) {
        ?>
                <div class='result'>
                    <input type="hidden" name="topic_id" value="<?= $data['topic_id'] ?>">
                    <h3><a href="<?= $data['url'] ?>" target="_blank"> <?= $data['title'] ?></a></h3>
                    <p><?= $data['description'] ?></p>
                    <p><a href="<?= $data['url'] ?>" target='_blank'> <?= $data['url'] ?></a></p>
                </div>
        <?php
            }
        } else {
            echo "<div class='no-result'>No results found</div>";
        }
    }
?>