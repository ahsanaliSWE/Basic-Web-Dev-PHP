<?php

	$limit = 3;

	echo "<h1>Tables Up To A Number: $limit</h1><hr>";
	
	$product = 1;
	$start = 2;

	do{
		for($i = 1; $i <= 10; $i++){           /* for loop prints the tables to 10 time muiltipy */
		    echo "$start x $i = ".$start*$i."<br>";
		} 
	     echo "<hr>";
	     $start++;
	} while($start<=$limit) 		/* checks for limit value to end the loop */
 	
?>