<?php 
    require_once("require/database_connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        fieldset {
            border: 2px solid #007BFF;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        legend {
            font-weight: bold;
            color: #007BFF;
            font-size: 1.5em;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"]:hover, input[type="email"]:hover, input[type="password"]:hover {
            background-color: #f0f8ff;
            border-color: #007BFF;

        }

        input[type="button"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #0056b3;
        }

        input[type="button"]:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        #email_msg {
            color: red;
            font-weight: bold;
        }

    </style>
    <script>
        
        function show_city(){
			
			var country_id = document.getElementById("country").value;
		
			var ajax_request = null;
			
			
			if(window.XMLHttpRequest){
				ajax_request = new XMLHttpRequest;
			}
			else{
				ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			ajax_request.onreadystatechange = function(){
				if(ajax_request.readyState==4 && ajax_request.status==200)
				{
					document.getElementById("show_city").innerHTML = ajax_request.responseText;
				}
			}
			
			ajax_request.open("POST", "ajax_process.php");
			ajax_request.setRequestHeader("content-type", "application/x-www-form-urlencoded");
			ajax_request.send("action=show_city&country_id="+country_id);
		}

        function checkEmail() {
            var email = document.getElementById("email").value;
            var registerBtn = document.getElementById("registerbtn");
            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("email_msg").innerHTML = ajax_request.responseText;
                    registerBtn.disabled = ajax_request.responseText;
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=check_email&email=" + email);
        }

        function register(){
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var country = document.getElementById("country").value;
            var city = document.getElementById("city").value;
            
            var ajax_request = null;

            if(name == "" || email == "" || password == "" || country == "" || city == "") {
                alert("Please fill all fields!");
                return false;
            }

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    alert(ajax_request.responseText);
                    document.getElementById("registraion_msg").innerHTML = ajax_request.responseText;
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=register&name=" + name + "&email=" + email + "&password=" + password + "&country=" + country + "&city=" + city);

        }
    </script>
</head>
<body>
    <center>
        <h1>Registration Form</h1>
        <div id="registraion_msg"></div>
        <fieldset>
            <legend>Registration Form.....</legend>
            <table>
                <tr>
                    <td><b>Name:</b></td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td><input type="email" id="email" name="email" onblur="checkEmail()"></td>
                </tr>
                <tr id="email_msg" align="center"></tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td><b>Country:</b></td>
                    <td>
                <?php
					$query = "SELECT * FROM country";
					
					$result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
				
					if($result->num_rows)
					{
						?>
							<select name="country" onchange="show_city()" id="country">
								<option>-- Select Country --</option>
								<?php
									while($data = mysqli_fetch_assoc($result))
									{
										?>
											<option value="<?php echo $data["country_id"]; ?>"><?php echo $data["name"]; ?></option>
										<?php
									}
								?>
							</select>
						<?php
					}
					else
					{
						echo "<span style='color: red'>No Country Found !...</span>";
					}
				?>
			</td>
		</tr>
		<tr id="show_city"></tr>
                <tr align="center">
                    <td colspan="2"><input type="button" id="registerbtn" name="registerbtn" value="Register" onclick="register()"></td>
                </tr>
            </table>
        </fieldset>
    </center>
    
</body>
</html>