<!DOCTYPE html>
<html>
<head>
	<title>Extended Multiplication Table</title>
</head>

<body>
	<h1 align="center">Extended Multiplication Table</h1>

	<ol type="i">
	     <li>Mathematical Table in tabular format each cell consist of table starting from 1 to 10.</li>
	     <li>The row of table should break after 5 cells.</li>
	     <li>Program should be dynamic.</li>
	</ol>

	<hr/>
	
	<?php
		$limit = 7;
		$count = 0;
	?>
	
	<center>
		<h1>Multiplication Table upto <?php echo "$limit"; ?></h1>
		
		<table border="1">
			<?php
                	for ($i = 2; $i <= $limit; $i++) {
                    	    if ($count % 5 == 0) {
                        	 echo "<tr>";
                    	    }
                    	   echo "<td><strong>Table of $i</strong><br>";
                  		  for ($j = 1; $j <= 10; $j++) {
                    		       echo "$i x $j = " . ($i * $j) . "<br>";
                    		   }
                    		echo "</td>";
                    	   $count++;
                    
                   	    if ($count % 5 == 0) {
                        	echo "</tr>";
                    	    }
                	}
           	        if ($count % 5 != 0) {
                           echo "</tr>";
                        }
           	        ?>
		</table>		

	</center>
		
</body>

</html>