<?php
    require_once("../require/database_connection.php");
    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php");
    }

    if ($_SESSION['role_type_id'] == 2) {
        header("Location: ../user/dashboard.php");
    } 

    if(isset($_GET['delete'])){
        $user_id = $_GET['delete'];
        $query = "DELETE FROM user WHERE user_id = ?";
        $statement = mysqli_prepare($database_connection, $query);
        mysqli_stmt_bind_param($statement, "i", $user_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        header("Location: dashboard.php?msg=User Deleted Successfully!&color=green"); 
    }


    
    $per_page = 3;
    $query_1 = "SELECT COUNT(user_id) AS 'total_records' FROM user where role_type_id = 2";
    $result = mysqli_query($database_connection, $query_1);
    $record = mysqli_fetch_assoc($result);
    $total_pages = ceil($record["total_records"] / $per_page);

    if (isset($_GET["page"])) {
        $start = $_GET["page"] * $per_page;
    } else {
        $start = 0;
        $_GET["page"] = 0;
    }

    $query = "SELECT user_id, name, email, gender FROM user where role_type_id = 2 LIMIT ?, ?";
    $statement = mysqli_prepare($database_connection, $query);
    mysqli_stmt_bind_param($statement, "ii", $start, $per_page);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $email, $gender);
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
                <a href="../logout.php">Logout</a>
            </div>     
    </header>

    <?php if (isset($_GET["msg"])) { ?>
        <div style="background: <?= $_GET["color"]; ?>; color: white; padding: 10px; text-align: center;"><?= $_GET["msg"]; ?></div>
    <?php } ?>


    <div class="container">
        <h2>Users</h2>
        <table>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php 
                while (mysqli_stmt_fetch($statement)) {
            ?>
                <tr>
                    <td><?= $user_id; ?></td>
                    <td><?= $name; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $gender; ?></td>
                    <td><a href="../view_logs.php?user_id=<?= $user_id; ?>&name=<?= $name?>">View Logs</a> | 
                        <a href="dashboard.php?delete=<?= $user_id; ?>" onclick="confirmDelete(event)">Delete</a></td>
                </tr>
            <?php 
                }
            ?>
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
