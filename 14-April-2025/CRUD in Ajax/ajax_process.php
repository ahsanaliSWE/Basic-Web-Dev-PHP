<?php
    require_once("require/database_connection.php");

    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "addPostForm") {
?>
        <fieldset>
            <legend>Add New Post!...</legend>
                <table>
                    <tr>
                        <td><b>Title:</b><br></td>
                        <td><input type="text" name="title" id="title"></td>
                    </tr>
                    <tr>
                        <td><b>Summary:</b><br></td>
                        <td><input type="text" name="summary" id="summary"></td>
                    </tr>
                    <tr>
                        <td><b>Description:</b><br></td>
                        <td><textarea name="description" id="description"></textarea></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><button id="addBtn" onclick="addUser()">Add</button>
                        &nbsp;&nbsp;
                        <button id="cancelBtn" onclick="cancel()">Cancel</button></td>
                    </tr>
                </table>
        </fieldset>
<?php
    } 
    elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == "showPost") {
        
        if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "") {
            $query = "SELECT * FROM posts WHERE title LIKE '%".$_REQUEST["search"]."%' OR summary LIKE '%".$_REQUEST["search"]."%' OR description LIKE '%".$_REQUEST["search"]."%' ORDER BY post_id DESC";
        } else {
            $query = "SELECT * FROM posts ORDER BY post_id DESC";
        }
        
        $result = mysqli_query($connection, $query) or die("Query Fail !... " . mysqli_error($connection));
        if ($result->num_rows) {
?>
            <table border="1" cellpadding="5" cellspacing="5">
                <thead>
                    <th>Post ID</th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Action</th>
            </thead>
            <tbody>
<?php
                    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {     
?>
                        <tr>
                            <td><?= $data["post_id"]; ?></td>
                            <td><?= $data["title"]; ?></td>
                            <td><?= $data["summary"]; ?></td>
                            <td><?= $data["description"]; ?></td>
                            <td style="display:flex">
                                <button id="editBtn" onclick="editPostForm(<?= $data['post_id']; ?>)">Edit</button>
                                &nbsp;&nbsp;
                                <button id="deleteBtn" onclick="deletePost(<?= $data['post_id']; ?>)">Delete</button></td>
                        </tr>
<?php
                    }
                }
                else {
                    echo "<tr><td colspan='5' align='center' style='color: red'><b>No Post Found !...</b></td></tr>";
                }
?>
            </tbody>
        </table>
<?php   
        }
        elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "addPost") {
            $query = "INSERT INTO posts (title, summary, description) 
                    VALUES 
                    ('".$_REQUEST["title"]."', '".$_REQUEST["summary"]."', '".$_REQUEST["description"]."')";
            
            $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
            
            if($result)
            {
                echo "<h3 style='color: green'>Post Added Successfully !...</h3>";
            }
            else{
                echo "<h3 style='color: red'>Post Adding Failed !...</h3>";
            }
        }
        elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "editPostForm") {
            $query = "SELECT * FROM posts WHERE post_id=".$_REQUEST["post_id"];
            
            $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
            
            if($result->num_rows) {
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        ?>
            <fieldset>
            <legend>Update Post!...</legend>
                <table>
                    <input type="hidden" name="post_id" id="post_id" value="<?= $data["post_id"]; ?>">
                    <tr>
                        <td><b>Title:</b><br></td>
                        <td><input type="text" name="title" id="title" value="<?= $data["title"]; ?>"></td>
                    </tr>
                    <tr>
                        <td><b>Summary:</b><br></td>
                        <td><input type="text" name="summary" id="summary" value="<?= $data["summary"]; ?>"></td>
                    </tr>
                    <tr>
                        <td><b>Description:</b><br></td>
                        <td><textarea name="description" id="description"><?= $data["description"]; ?></textarea></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><button id="editBtn" onclick="updatePost()">Update</button>
                        &nbsp;&nbsp;
                        <button id="cancelBtn" onclick="cancel()">Cancel</button></td>
                    </tr>
                </table>
        </fieldset>
        <?php
            }
            else{
                echo "<h3 style='color: red'>Post Not Found !...</h3>";
            }
        }
        elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "updatePost") {
            $query = "UPDATE posts SET title='".$_REQUEST["title"]."', summary='".$_REQUEST["summary"]."', description='".$_REQUEST["description"]."' WHERE post_id=".$_REQUEST["post_id"];
            
            $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
            
            if($result)
            {
                echo "<h3 style='color: green'>Post Updated Successfully !...</h3>";
            }
            else{
                echo "<h3 style='color: red'>Post Updating Failed !...</h3>";
            }
        }
        elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "deletePost") {
            $query = "DELETE FROM posts WHERE post_id=".$_REQUEST["post_id"];
            
            $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
            
            if($result)
            {
                echo "<h3 style='color: green'>Post Deleted Successfully !...</h3>";
            }
            else{
                echo "<h3 style='color: red'>Post Deleting Failed !...</h3>";
            }
        }
              
?>
