<!DOCTYPE html>
<html>
<head>
	<title>Check Box Policies</title>
</head>

<body>
	<center>
   	    <h1>Policies Using Checkbox</h1>
	    <br/>
	    <hr/> 
	</center>

	<form method="POST" action="process.php">
	      <table align="center" cellspacing="5" cellpadding="2">
		     <tr>	
			 <td>	
		            Stipend
			    <input type="checkbox" name="stipend" value="stipend">			    
			 </td>
		      </tr>
		     <tr>	
			 <td>	
		            Discipline
			    <input type="checkbox" name="discipline" value="discipline">		    
			 </td>
		      </tr>
		     <tr>	
			 <td>	
		            Attendance
			    <input type="checkbox" name="attendance" value="attendance">		    
			 </td>
		      </tr>
		     <tr>	
			 <td>	
		            Assignment
			    <input type="checkbox" name="assignment" value="assignment">		    
			 </td>
		      </tr>
		     <tr>	
			 <td>	
		            Agree
			    <input type="checkbox" name="agree" value="agree">			    
			 </td>
		      </tr align="center">
			 <td>	
			    <input type="submit" name="submit" value="submit">			    
			 </td>
		      </tr>
	      </table>
	</form>
 

</body>

</html>