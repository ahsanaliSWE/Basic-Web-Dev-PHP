<?php
	// Prime Number Series
 	/* 2 3 5 7 11 13 */

	$limit = 13;
	echo "<h1>Prime Number Series</h1><hr>";
	echo "Prime Numbers up to $limit: ";
	
	for($i = 2; $i <= $limit; $i++)
	{
	    $isPrime = true;
		for($j = 2; $j*$j <= $i; $j++)
		{
		    if ($i % $j == 0) 
		    {
          	      $isPrime = false;
                      break;
       	 	    }
		}

	     if ($isPrime) 
	     {
        	echo $i . " ";
    	     }
	}


?>