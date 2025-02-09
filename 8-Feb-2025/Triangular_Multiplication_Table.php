<?php
	   // Triangular Multiplication Table
		
	/*
		0
		0 1
		0 2 4
		0 3 6 9
		0 4 8 12 16
		0 5 10 15 20 25
	*/

	  echo "<h1>Triangular Multiplication Table</h1><hr>";

	   for($i = 0; $i <= 5; $i++)
	   {
		for($j = 0; $j <= $i; $j++)
		{
		    echo ($j * $i)." ";
		}
		echo "<br>";
	   }

?>