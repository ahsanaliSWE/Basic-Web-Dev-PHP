<?php
require_once 'require/database_connection.php';
session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php?message=Please login first.");
    }
    
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM users WHERE user_id = '$user_id'"; 
    $result = mysqli_query($database_connection, $query) or die("<p style='color:red'><b>Error Code: </b>" . mysqli_errno($database_connection) . "</p><p style='color:red'><b>Error Message: </b>" . mysqli_error($database_connection) . "</p>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: cursive;
            background-color: #f4f4f4;
        }
        
        center {
            margin-top: 50px;
        }

        table {
            width: 100%;
        }

        td {
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Dashboard</h1>
        <hr />
        <table border="1" cellpadding="5">
            <thead>
				<tr style="background-color: lightskyblue; color: white; font-weight:bolder">
					<th>User ID</th>
					<th>User Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Address</th>
				</tr>
			</thead>
            <tbody>
				<?php
					while($row = mysqli_fetch_assoc($result))
					{
						?>
							<tr>
								<td align="center"><?php echo $row["user_id"]; ?></td>
								<td><?php echo $row["name"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["password"]; ?></td>
								<td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                            </tr>
						<?php
					}
				?>
			</tbody>
        </table>
    </center>
    
</body>
</html>