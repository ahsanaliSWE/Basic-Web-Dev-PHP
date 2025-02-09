<?php

 		// Generate All Triangular Shapes

	// a) Star Triangular Shape

	/*
		*
		**
		***
		****
		*****
	*/

	echo "<h1>Generate All Triangular Shapes</h1><hr>";
	echo "<h2>a) Star Triangular Shape</h2>";

	for($i = 1; $i <= 5; $i++)
	{
		for($j = 1; $j <= $i; $j++)
		{
			echo "*";
		}
	    echo "<br>";	
	}

	// b) Alphabetical Triangular Shape

	/*
		a
		ab
		abc
		abcd
		abcde	
	*/

	echo "<h2>b) Alphabetical Triangular Shape</h2>";

	
	$char = 'a';

	for($i = 1; $i <= 5; $i++)
	{
		$currentChar = $char;
		for($j = 1; $j <= $i; $j++)
		{
			echo $currentChar;
			$currentChar++;
		}
	    echo "<br>";	
	}

	// c) Numeric Triangular Shape

	/*
		1
		12
		123
		1234
		12345
	*/

	echo "<h2>c) Numeric Triangular Shape</h2>";

	$start = 1;
	for($i = 1; $i <= 5; $i++)
	{
		$currentNum = $start;
		for($j = 1; $j <= $i; $j++)
		{
			echo $currentNum;
			$currentNum++;
		}
	    echo "<br>";	
	}

	// d) Numeric Triangular Shape And Its Multiplication

	/*
		1     = 1
		12    = 2
		123   = 6
		1234  = 24
		12345 =120
	*/

	echo "<h2>d) Numeric Triangular Shape And Its Multiplication</h2>";

	$start = 1;
	$rows = 5;
		
	for($i = 1; $i <= $rows; $i++)
	{
		$product = 1;
		$currentNum = $start;
		for($j = 1; $j <= $i; $j++)
		{
			echo $currentNum;
       			$product *= $currentNum;
        		$currentNum++;
		}
		
		// inner loop to print empty spaces
		for ($k = $j; $k <= $rows; $k++) {
      		  echo "&nbsp&nbsp";
    		}
		
		echo " = " . $product . "<br>";	

	}

	

?>