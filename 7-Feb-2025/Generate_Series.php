<?php
   	// 1) 1 4 9 16 25
	
	echo "<h1>1) 1 4 9 16 25</h1><hr>";
	
	echo "<h3>Sequence Generated : ";

	$endNum = 5;
	$i = 1;

	while($i <= $endNum){
	  echo $i*$i." ";
	  $i++;
	}

	// 2) 1 3 6 10 15 21

	echo "<h1>2) 1 3 6 10 15 21</h1><hr>";
	
	echo "<h3>Sequence Generated : ";

	$endNum = 6;
	$i = 1;
	$sum = 0;

	while($i <= $endNum){
	  echo " ".$sum+=$i;
	  $i++;
	}

	// 3) 50 40 30 20 10

	echo "<h1>3) 50 40 30 20 10</h1><hr>";
	
	echo "<h3>Sequence Generated : ";

	$endNum = 10;
	$i = 50;

	while($i >= $endNum){
	  echo $i." ";
	  $i-=$endNum;
	}

	// 4) 6 12 20 30 42

	echo "<h1>4) 6 12 20 30 42</h1><hr>";
	
	echo "<h3>Sequence Generated : ";

	$endNum = 7;
	$i = 2;

	while($i < $endNum){
	  echo ($i * ($i + 1)) . " ";
	  $i++;
	}

?>