<!DOCTYPE html>
<html>
	<head>
              <title>Page 2</title>
        </head>
<body>
<center>
	<h1>Enter Your Details</h1>
	<br/>
	<hr/>

	 <form method="POST" action="page_3.php">
		
	    <table cellspacing="5" cellpadding="10" border="1">

		<tr>
		      <th>S:no</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Select</th>
		      <input type="hidden" name="count" value="<?php echo $_POST["count"]??"" ; ?>"> 
               </tr>
               <?php 
		$count = $_POST["count"];
                    for($i=1; $i<=$count; $i++){
  
                ?>
		                
                  <tr>
		      <td> <?php echo $i; ?> </td>
                      <td><input type="text" name="first_name<?php echo $i; ?>" placeholder="Enter your name" > </td>
		      <td>
			<input type="radio" name="gender<?php echo $i; ?>" value="Male"> Male 
			<input type="radio" name="gender<?php echo $i; ?>" value="Female"> Female</td>
			<td>
			 <select name="country<?php echo $i; ?>">
                               <option value="Pakistan">PAK</option>
                               <option value="USA">USA</option>
                               <option value="India">IND</option>
                               <option value="Bangladesh">BANG</option>
                            </select> 
		      </td>
                  </tr>
               <?php
                   }  
                ?>
		<tr align="center">
		     <td colspan="5"><br/><input type="submit" name="submit" value="Submit"><br/><br/></td>
		</tr>
            </table>

         </form>


	
	
</center>
</body>
</html>