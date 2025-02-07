<?php
	// Even Odd Series

	$even = "";
	$odd = "";

	for($i = 1 ; $i<=100 ; $i++){
	   if($i % 2 == 0){
	     $even .= $i." ";
	   } else {
	     $odd .= $i." ";
	   }
	}

	echo "<h1>Even Odd Series using single loop</h1><hr>";
	echo "<strong>Odd :</strong> $odd <br>";
	echo "<strong>Even :</strong> $even";

?>