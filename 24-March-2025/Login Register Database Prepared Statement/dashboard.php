<?php
require_once 'require/database_connection.php';
session_start();
    
    if (!isset($_SESSION['employee_id'])) {
        header("Location: login.php?message=Please login first.");
    }
    
    $employee_id = $_SESSION['employee_id'];
    
    $query = "SELECT employee_id, name, email, password, gender, country, phone, address FROM employee WHERE employee_id = ?"; 
    
    $statement = mysqli_prepare($database_connection, $query);
    mysqli_stmt_bind_param($statement, "i", $employee_id);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_bind_result($statement, $employee_id1, $name1, $email1, $password1, $gender1, $country1, $phone1, $address1);

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
					<th>Employee ID</th>
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
					while(mysqli_stmt_fetch($statement))
					{
						?>
							<tr>
								<td align="center"><?php echo $employee_id1; ?></td>
								<td><?php echo $name1; ?></td>
								<td><?php echo $email1; ?></td>
								<td><?php echo $password1; ?></td>
								<td><?php echo $gender1; ?></td>
                                <td><?php echo $phone1; ?></td>
                                <td><?php echo $address1; ?></td>
                            </tr>
						<?php
					}
				?>
			</tbody>
        </table>
    </center>
    
</body>
</html>