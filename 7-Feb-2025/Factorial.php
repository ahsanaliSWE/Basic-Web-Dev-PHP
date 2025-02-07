<?php
	// Factorial Of A Number

	$num = 5;
	$fact = 1;
	$i = 1;

	echo "<h1>Input: $num </h1><hr>";
	echo "<h3>Factorial:<br></h3>";
	
	if($num < 0){
	  echo "Error! Factorial of a negative number doesn't exist.";
	} else {

	  while($i <= $num){
	     
	     if($i==$num){	// Nested loop just for = at the end to be in format of 1*2=2
	         echo "$i = ";
	         $fact*=$i;
	         $i++;
	     } else {
 	     	 echo "$i * ";
	     	 $fact*=$i;
	     	 $i++;
	     }
	  }
	   echo $fact;
	}
		
?>