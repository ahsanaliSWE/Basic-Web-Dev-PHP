<?php
	// Generate Fibonacci Series

	$limit = 10;

	echo "<h1>Generate Fibonacci Series of $limit numbers</h1><hr>";	
	
	$count = 1;
	$num1 = 0;
	$num2 = 1;
	$num3 = 0;

	do{
 	     echo $num1." ";
	      $num3 = $num1 + $num2;  /* third number is addition of previous two numbers */
              $num1 = $num2;	     /* swapping the previous two numbers for continuance of sequence */
              $num2 = $num3;
	
	      $count++;
	} while($count <= $limit) /* $count used for ending loop */

?>