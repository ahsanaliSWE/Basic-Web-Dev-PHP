<?php
		// Generate Star Pyramid
	/*
		     *
    		    ***
	      	   *****
   		  *******
  		 *********
 		***********
	*/

	echo "<h1>Generate Star Pyramid</h1><hr>";

	$rows = 6;
	for($i = 1; $i <= $rows; $i++)
	{

 		// first inner loop for empty spaces
		for($j = $i; $j <= $rows; $j++)
		{
			echo "&nbsp&nbsp";
			
		}
		
		// second inner loop for printing star '*'
		for ($k = 1; $k <= (2 * $i - 1); $k++) {
     		   echo "*";
    		}
		
		echo "<br>";
	}


?>