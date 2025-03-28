<?php
    require_once("../require/database_connection.php");
    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php");
    }

    if ($_SESSION['role_type_id'] == 2) {
        header("Location: ../editor/dashboard.php");
    } elseif ($_SESSION['role_type_id'] == 3) {
        header("Location: ../user/dashboard.php");
    }

    if (isset($_POST['add_post'])) {
        $post_title = $_POST['title'];
        $post_summary = $_POST['summary'];
        $post_description = $_POST['description'];
        $added_by = $_SESSION['user_id'];

        $query = "INSERT INTO posts (title, summary, description, added_by) VALUES (?, ?, ?, ?)";
        $statement = mysqli_prepare($database_connection, $query);
        mysqli_stmt_bind_param($statement, "sssi", $post_title, $post_summary, $post_description, $added_by);
        $result = mysqli_stmt_execute($statement);

        if($result){
            header("Location: dashboard.php?msg=Post Added Successfully&color=green");
        }else {
            header("Location: dashboard.php?msg=Post Not Added &color=red");
        }
    }

    if(isset($_GET['edit'])){
        $post_id = $_GET['edit'];
        $query2 = "SELECT title, summary, description FROM posts WHERE post_id = ?";
        $statement = mysqli_prepare($database_connection, $query2);
        mysqli_stmt_bind_param($statement, "i", $post_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_bind_result($statement, $utitle, $usummary, $udescription);
        mysqli_stmt_fetch($statement);

        mysqli_stmt_close($statement);

        if(isset($_POST['update_post'])){
            $post_title = $_POST['title'];
            $post_summary = $_POST['summary'];
            $post_description = $_POST['description'];

            $update_query = "UPDATE posts SET title = ?, summary = ?, description = ? WHERE post_id = ?";
            $statement = mysqli_prepare($database_connection, $update_query);
            mysqli_stmt_bind_param($statement, "sssi", $post_title, $post_summary, $post_description, $post_id);
            $update_result = mysqli_stmt_execute($statement);

            if($update_result){
                header("Location: dashboard.php?msg=Post Updated Successfully&color=green");
            }else {
                header("Location: dashboard.php?msg=Post Not Updated &color=red");
            }
        }
    }

    if(isset($_GET['delete'])){
        $post_id = $_GET['delete'];
        $query = "DELETE FROM posts WHERE post_id = ?";
        $statement = mysqli_prepare($database_connection, $query);
        mysqli_stmt_bind_param($statement, "i", $post_id);
        $result = mysqli_stmt_execute($statement);

        if($result){
            header("Location: dashboard.php?msg=Post Deleted Successfully&color=green");
        }else {
            header("Location: dashboard.php?msg=Post Not Deleted &color=red");
        }
    }

    $per_page = 3;
    $query_1 = "SELECT COUNT(post_id) AS 'total_records' FROM posts";
    $result = mysqli_query($database_connection, $query_1);
    $record = mysqli_fetch_assoc($result);
    $total_pages = ceil($record["total_records"] / $per_page);

    if (isset($_GET["page"])) {
        $start = $_GET["page"] * $per_page;
    } else {
        $start = 0;
        $_GET["page"] = 0;
    }

    $query = "SELECT p.post_id, p.title, p.summary, p.description, u.name FROM posts p JOIN user u ON p.added_by = u.user_id LIMIT ?, ?";
    $statement = mysqli_prepare($database_connection, $query);
    mysqli_stmt_bind_param($statement, "ii", $start, $per_page);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $post_id, $title, $summary, $description, $author);
    mysqli_stmt_store_result($statement);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        header {
            background: #333;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }
        .box {
            background: white;
            width: 50%;
            margin: auto;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        form input, form textarea {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: block;
            align-self: center;
        }
        form button {
            padding: 10px 20px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background: black;
        }
        form button[type="reset"] {
            background: red;
        }
        form button[type="reset"]:hover {
            background: darkred;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            max-width: 200px;
        }
        th {
            background: #444;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .pagination {
            margin-top: 10px;
            text-align: center;
        }
        .pagination a {
            padding: 5px 10px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ddd;
        }
        .pagination a:hover {
            background: #ddd;
        }
        .logout {
            float: right;
            margin-right: 20px;
        }
        .logout a {
            text-decoration: none;
            color: red;
            font-weight: bold;
            padding: 5px 10px;
        }
        .logout a:hover {
            color: darkred;
            background-color: #f4f4f4;
            padding: 5px 10px;
        }
    </style>
    <script>
         function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this post?")) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Welcome <?= $_SESSION['name']; ?> to Admin Dashboard</h1>
           <div class="logout">
                <a href="../logs.php">View Logs</a>
                <a href="../logout.php">Logout</a>
            </div>     
    </header>

    <?php if (isset($_GET["msg"])) { ?>
        <div style="background: <?= $_GET["color"]; ?>; color: white; padding: 10px; text-align: center;"><?= $_GET["msg"]; ?></div>
    <?php } ?>

    <div class="box">
        <?php 
        if (isset($_GET['edit'])) { 
            $post_id = $_GET['edit'];
        ?>
            <h2>Edit Post</h2>
            <form method="POST">
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <input type="text" name="title" value="<?= $utitle; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Summary
                    </td>
                    <td>
                        <input type="text" name="summary" value="<?= $usummary; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Description
                    </td>
                    <td>
                        <textarea name="description" rows="4"><?= $udescription; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="update_post">Edit Post</button>
                    </td>
                    <td>
                        <button type="reset">Cancel</button>
                    </td>
                </tr>
            </form>
        <?php 
        } else { 
        ?>
            <h2>Add New Post</h2>
            <form method="POST">
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <input type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <td>
                        Summary
                    </td>
                    <td>
                        <input type="text" name="summary">
                    </td>
                </tr>
                <tr>
                    <td>
                        Description
                    </td>
                    <td>
                        <textarea name="description" rows="4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="add_post">Add Post</button>
                    </td>
                    <td>
                        <button type="reset">Cancel</button>
                    </td>
                </tr>
            </form>
        <?php } ?>
        </div>


    <div class="container">
        <h2>Posts</h2>
        <table>
            <tr>
                <th>Post Id</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Description</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            <?php while (mysqli_stmt_fetch($statement)) { ?>
            <tr>
                <td><?= $post_id; ?></td>
                <td><?= $title; ?></td>
                <td><?= $summary; ?></td>
                <td><?= $description; ?></td>
                <td><?= $author; ?></td>
                <td><a href="dashboard.php?edit=<?= $post_id; ?>" style="color:green">Edit</a> |
                    <a href="dashboard.php?delete=<?= $post_id; ?>" style="color:red" onclick="confirmDelete(event)">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div class="pagination">
            <?php 
                if ($_GET["page"] > 0) { 
            ?>
                <a href="dashboard.php?page=<?= $_GET["page"] - 1; ?>">Previous</a>
            <?php 
                } 
            ?>
            <?php 
                for ($loop = 1; $loop <= $total_pages; $loop++) { 
            ?>
                <a href="dashboard.php?page=<?= $loop - 1; ?>"><?= $loop; ?></a>
            <?php 
                } 
            ?>
            <?php 
                if ($_GET["page"] < $total_pages - 1) { 
            ?>
                <a href="dashboard.php?page=<?= $_GET["page"] + 1; ?>">Next</a>
            <?php 
                } 
            ?>
        </div>
    </div>
</body>
</html>
