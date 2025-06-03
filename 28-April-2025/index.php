<?php
    require_once('require/database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PDF Books</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    p {
        text-align: center;
        color: #666;
    }
    hr {
        margin: 20px 0;
    }
    table {
        width: 80%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 5px;
        overflow: hidden;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        display: inline-block;
        padding: 8px 12px;
        margin-right: 5px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn:hover {
        background-color: #0056b3;
    }
  </style>
</head>
<body>
    <center>

        <h1>PDF Books</h1>
        <p>View or download the PDF books below:</p>
        <hr>
        
        <h2>Books List</h2>
        
        <table>
            <tr>
                <th>S.No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            
            <?php
            $query = "SELECT * FROM books JOIN authors ON books.author_id = authors.author_id";
            $result = mysqli_query($connection, $query);
            $sno = 1;
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?= $sno++; ?></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td>
                        <a href="book.php?id=<?= $row['book_id']; ?>&dest=I" class="btn" target="_blank">View</a>
                        <a href="book.php?id=<?= $row['book_id']; ?>&dest=D" class="btn">Download</a>
                    </td>
                    <?php
            }
        } else {
            echo "<tr><td colspan='4'>No books found.</td></tr>";
        }
        ?>
    </table>
</center>
    
</body>
</html>
