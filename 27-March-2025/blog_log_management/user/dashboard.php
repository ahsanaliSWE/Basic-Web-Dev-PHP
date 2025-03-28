<?php

    require_once '../require/database_connection.php';

    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../index.php");
    }

    if ($_SESSION['role_type_id'] == 1) {
        header("Location: ../admin/dashboard.php");
    } elseif ($_SESSION['role_type_id'] == 2) {
        header("Location: ../editor/dashboard.php");
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
<title>User Dashboard</title>
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
    <h1>Welcome <?= $_SESSION['name']; ?> to User Dashboard</h1>
       <div class="logout">
            <a href="../logout.php">Logout</a>
        </div>     
</header>

<div class="container">
    <h2>Posts</h2>
    <table>
        <tr>
            <th>Post Id</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Description</th>
            <th>Author</th>
        </tr>
        <?php while (mysqli_stmt_fetch($statement)) { ?>
        <tr>
            <td><?= $post_id; ?></td>
            <td><?= $title; ?></td>
            <td><?= $summary; ?></td>
            <td><?= $description; ?></td>
            <td><?= $author; ?></td>
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

<?php 
mysqli_stmt_close($statement);
mysqli_close($database_connection);
?>
