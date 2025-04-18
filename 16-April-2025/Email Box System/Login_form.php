<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login-System</title>
	<style type="text/css">
		body{
			background-color: teal;
			color: white;
		}
		h1{

			background-color: gray;
			color: white;
			border-radius: 5px 0px 5px 0px;
			font-family: cursive;
			padding: 10px;
			margin: 10px;
		}
		fieldset{
			width: 30%;
			border-radius: 5px;
			border:2px double black;
		}
		table{
			margin: 0 auto;
		}
		tr{
			width: 100%;
		}
		input[type="email"], input[type="Password"]{
			width: 100%;
			padding: 5px;
			margin: 5px 0;
			border-radius: 5px;
			border: 1px solid black;
		}
		input[type="submit"]{
			width: 100%;
			padding: 5px;
			margin: 5px 0;
			border-radius: 5px;
			border: 1px solid black;
			background-color: gray;
			color: white;
		}
		button{
			width: 100%;
			padding: 5px;
			margin: 5px 0;
			border-radius: 5px;
			border: 1px solid black;
			background-color: gray;
			color: white;
		}
		p{
			color: white;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<center>
<h1>Login System in Cookie</h1>
<hr>
<br><br>
<fieldset>
	<p><?= $_GET['msg']??''; ?></p>
	<legend>Login Here..!</legend>
	<form method="POST" action="login_Process.php">
		<table>
			<tr>
				<td>Email: </td>
				<td> <input type="email" name="email" placeholder="Enter Your Email"> </td>
			</tr>
			<tr>
				<td>Password: </td>
				<td> 
					<input type="Password" name="password" placeholder="Enter Your Password">
				</td>
			</tr> 
			<tr align="center">
				<td colspan="2">
					<span> <input type="checkbox" value="rememberMe" name="rememberMe"> Remember Me </span><br>
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"> 
					<input type="submit" name="login" value="Login">
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</center>
</body>
</html>