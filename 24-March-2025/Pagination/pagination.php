<?php
    
    require_once("require/database_connection.php");

	$per_page = 3;
	
	$query_1 = "SELECT COUNT(post_id) AS 'total_records' FROM posts";

    $result = mysqli_query($database_connection, $query_1);

    $record = mysqli_fetch_assoc($result);

    $total_pages = ceil($record["total_records"]/$per_page);

    if(isset($_GET["page"]))
	{
		$start = $_GET["page"]*$per_page;
	}
	else
	{
		$start = 0;
		$_GET["page"] =	0;
	}

    $query = "SELECT post_id, title, summary, description, author FROM posts LIMIT ?, ?";

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
    <title>Pagination</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: blue;
            color: white;
            font-weight: bold;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color:rgb(0, 156, 254);
            font-weight: bold;
            padding: 6px 10px;
            border-radius: 5px;
        }

        a:hover {
            background-color: blue;
            color: white;
        }

        h1 {
            color: blue;
            text-align: center;
            background-color:rgb(124, 214, 242);
            width: 50%;
            padding: 10px;
            border-radius: 10px;
        }


    </style>
</head>
<body>
    <center>
        <h1>PAGINATION</h1>
        <hr />
        <?php
			if(mysqli_stmt_num_rows($statement))
			{
				?>
					<div align="center">
						<p>
							<?php
								if($_GET["page"] > 0)
								{
									?>
										<span>&nbsp;<a href="pagination.php?page=<?php echo $_GET["page"]-1; ?>">Previous</a>&nbsp;</span>
									<?php
								}
							?>
						
							<?php
								for($loop=1; $loop<=$total_pages; $loop++)
								{
									if($_GET["page"] == $loop-1)
									{
										?>
											<span style="font-size:20px; color:blue"><?php echo $loop."&nbsp;"; ?></span>
										<?php
									}
									else
									{
										?>
											<span><a href="pagination.php?page=<?php echo $loop-1; ?>"><?php echo $loop."&nbsp;"; ?></a></span>
										<?php
									}
								}
							?>
							
							<?php
								if($_GET["page"] < $total_pages-1)
								{
									?>
										<span>&nbsp;<a href="pagination.php?page=<?php echo $_GET["page"]+1; ?>">Next</a>&nbsp;</span>
									<?php
								}
							?>
						</p>
        <table border="1">
            <tr>
                <th>Post Id</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Description</th>
                <th>Author</th>
            </tr>
            <?php 
                while(mysqli_stmt_fetch($statement)) { 
            ?>
            <tr>
                <td><?= $post_id; ?></td>
                <td><?= $title; ?></td>
                <td><?= $summary; ?></td>
                <td><?= $description; ?></td>
                <td><?= $author; ?></td>
            </tr>
            <?php
                } 
            ?>
        </table>
        </div>
				<?php
			}
			else
			{
				?>
					<div align="center" style="margin:10px; padding:10px; background-color:lightpink; color:red; font-size:20px">
						<p>No Record Found !....</p>
					</div>
				<?php
			}
		?>
    </center>
    
</body>
</html>