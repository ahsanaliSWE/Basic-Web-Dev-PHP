<?php
       // Generate any number table in for loop.

	$num = 5;

        echo "<h2>Input : $num <br></h2>";
	echo "<h2>Table: <br><hr></h2>";
        
	for($i=1; $i<=10; $i++){
	    echo "<p>$num x $i = ".$num*$i."<br></p>";
	}

?>