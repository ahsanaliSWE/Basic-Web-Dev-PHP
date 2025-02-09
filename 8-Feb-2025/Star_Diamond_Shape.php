<?php
	// Generate Star Diamond Shape

        echo "<h1>Generate Star Diamond Shape</h1><hr>";

	$rows = 5; 

	/*		    *
			   ***
			  *****
			 *******
			*********
	*/		

	// first outer loop for upper part of pyramid
	for ($i = 1; $i <= $rows; $i++) 
	{
	    // first inner loop prints empty spaces
    	    for ($j = $rows - $i; $j > 0; $j--) 
	    {
        	echo "&nbsp&nbsp;";
    	    }

	    // second inner loop prints star '*' 
	    for ($k = 1; $k <= (2 * $i - 1); $k++) 
	    {
        	echo "*";
    	    }

   	    echo "<br>";
	}


	/*		   *******
			    *****
			     ***
			      *
	*/		

	// second outer loop for inverted pyramid
	for ($i = $rows - 1; $i >= 1; $i--) {
 
	    // first inner loop prints empty spaces
   	    for ($j = $rows - $i; $j > 0; $j--) {
       	    echo "&nbsp&nbsp;";
    	    }

	    // second inner loop prints star '*'
    	    for ($k = 1; $k <= (2 * $i - 1); $k++) {
         	echo "*";
   	    }

    	    echo "<br>";
	}
	

?>