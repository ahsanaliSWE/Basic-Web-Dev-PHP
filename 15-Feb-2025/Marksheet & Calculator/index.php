<!DOCTYPE html>
<html>
<head>
	<title>Extended Mark Sheet & Calculator</title>
</head>

<body>
	<center>
		<h1>Extended Mark Sheet & Calculator</h1>
		<hr/>

		<h2>Enter your subject marks</h2>
		<form method="POST" action="process.php">
			<table>
				<tr>
				   <th>Maths :</th>
				   <td><input type="number" name="math" min="0" max="100"></td>
				</tr>
				<tr>
				   <th>Physics :</th>
				   <td><input type="number" name="physics" min="0" max="100"></td>
				</tr>
				<tr>
				   <th>Chemistry :</th>
				   <td><input type="number" name="chemistry" min="0" max="100"></td>
				</tr>
				<tr>
				   <th>English :</th>
				   <td><input type="number" name="english" min="0" max="100"></td>
				</tr>
				<tr>
				   <th>Computer :</th>
				   <td><input type="number" name="computer" min="0" max="100"></td>
				</tr>
				<tr>
				   <td colspan="2"><input type="submit" name="submit" value="Submit Marksheet Data"></td>
				</tr>
			</table>
		</form>

		<hr/>
		<h2>Calculator</h2>

		<form method="POST" action="process.php">
			<table>
				<tr>
				    <th>Number 1:</th>
				    <td><input type="number" name="num1"></td>
				</tr>
				<tr>
				    <th>Number 2:</th>
				    <td><input type="number" name="num2"></td>
				</tr>
				<tr>
				    <th>Operator:</th>
				    <td>
					<select name="operator">
                               		    <option value="+">+</option>
                              		    <option value="-">-</option>
                              		    <option value="*">*</option>
					    <option value="/">/</option>
					</select>
				    </td>
				</tr>
				<tr align="center">
				   <td colspan="2"><input type="submit" name="calculate" value="Calculate"></td>
				</tr>

			</table>
		</form>
	</center>
</body>
</html>