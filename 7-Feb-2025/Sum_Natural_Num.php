<?php

	// Sum Of First 10 Natural Numbers

	echo "<h1>Sum Of First 10 Natural Numbers<br><hr></h1>";

	$sum = 0;

	for($i=1 ; $i<=10 ; $i++){
	    $sum = $sum + $i;
	    
	    if($i==10){
	       echo "$i = $sum";
	    } else {
	     echo "$i + ";
	    }
	}
?>