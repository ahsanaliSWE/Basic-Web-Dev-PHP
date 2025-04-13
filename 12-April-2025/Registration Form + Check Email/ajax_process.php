<?php
    require_once("require/database_connection.php");

    if(isset($_REQUEST["action"]) && $_REQUEST["action"]=="show_city")	{
		$query = "SELECT * FROM city WHERE country_id=".$_REQUEST["country_id"];
					
		$result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
				
		if($result->num_rows)
		{
			?>
				<td><b>City:</b></td>
				<td>
					<select name="city" id="city">
						<option>-- Select City --</option>
						<?php
							while($data = mysqli_fetch_assoc($result))
							{
								?>
									<option value="<?php echo $data["city_id"]; ?>"><?php echo $data["name"]; ?></option>
								<?php
							}
						?>
					</select>
				</td>
			<?php
		}
		else{
			echo "<td colspan=2 align='center' style='color: red'><b>No City Found !...</b></td>";
		}
	}

    elseif(isset($_REQUEST["action"]) && $_REQUEST["action"]=="check_email")
    {
        $query = "SELECT * FROM user WHERE email='".$_REQUEST["email"]."'";
                    
        $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
                
        if($result->num_rows)
        {
            echo "<td colspan='2' style='color: red'>Email Already Exist !...</td>";
        }
    }elseif(isset($_REQUEST["action"]) && $_REQUEST["action"]=="register")
    {
        $query = "INSERT INTO user (name, email, password, country_id, city_id) 
                VALUES 
                ('".$_REQUEST["name"]."', '".$_REQUEST["email"]."', '".$_REQUEST["password"]."', '".$_REQUEST["country"]."', '".$_REQUEST["city"]."')";
        
        $result = mysqli_query($connection, $query) or die("Query Fail !... ".mysqli_error($connection));
        
        if($result)
        {
            echo "<span style='color: green'>Registration Successfully !...</span>";
        }
        else{
            echo "<span style='color: red'>Registration Failed !...</span>";
        }
    }

?>