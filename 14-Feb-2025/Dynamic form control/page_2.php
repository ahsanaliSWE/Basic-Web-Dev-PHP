<!DOCTYPE html>
<html>
	<head>
              <title>Page 2</title>
        </head>
<body>
<center>
	<h1>Page 2</h1>
	<br/>
	<hr/>

	 <form method="POST" action="page_3.php">
		
	    <table cellpadding="3" >

		<tr>
		     <td>
			<input type="hidden" name="count" value="<?php echo $_POST["count"]??"" ; ?>"> 
		     </td>
		</tr>
               <?php 
		$count = $_POST["count"];
                    for($i=1; $i<=$count; $i++){
  
                ?>
			
                  <tr>
                      <th>First Name<?php echo $i; ?> :</th>
                      <td><input type="text" name="first_name<?php echo $i; ?>" > </td>
                  </tr>
		  <tr align="center">
                      <td>Male<?php echo $i; ?> :<input type="radio" name="gender<?php echo $i; ?>" value="male"> </td>
                      <td>Female<?php echo $i; ?> :<input type="radio" name="gender<?php echo $i; ?>" value="female"> </td>
                  </tr>
		  <tr>
                      <th>Country<?php echo $i; ?> :</th>
                      <td>
			 <select name="country<?php echo $i; ?>">
                               <option>--Select Country--</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="India">India</option>
                               <option value="Canada">Canada</option>
                               <option value="Australia">Australia</option>
                            </select> 
		      </td>
                  </tr>
               <?php
                   }  
                ?>
		<tr align="center">
		     <td colspan="2"><br/><input type="submit" name="submit" value="Submit"></td>
		</tr>
            </table>

         </form>


	
	
</center>
</body>
</html>