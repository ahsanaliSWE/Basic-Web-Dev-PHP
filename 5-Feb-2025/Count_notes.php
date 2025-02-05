<?php
       //Count Total Number Of Notes In Given Amount

	$amount = 63589; 

	echo "Input amount: $amount<br><br>";        

	echo "Total number of notes: <br>";

        if($amount >= 5000){
	$total = (int)($amount / 5000);
	echo "5000: $total<br>";
	$amount -= $total * 5000;
	} else {
        echo "5000: 0<br>";
	}

        if($amount >= 1000){	
	$total = (int)($amount / 1000);
	echo "1000: $total<br>";
	$amount -= $total * 1000;
	} else {
        echo "1000: 0<br>";
	}


        if($amount >= 500){
	$total = (int)($amount / 500);
	echo "500: $total<br>";
	$amount -= $total * 500;
	} else {
        echo "500: 0<br>";
	}


        if($amount >= 100){
	$total = (int)($amount / 100);
	echo "100: $total<br>";
	$amount -= $total * 100;
	} else {
        echo "100: 0<br>";
	}


        if($amount >= 50){
	$total = (int)($amount / 50);
	echo "50: $total<br>";
	$amount -= $total * 50;
	} else {
        echo "50: 0<br>";
	}


        if($amount >= 20){
	$total = (int)($amount / 20);
	echo "20: $total<br>";
	$amount -= $total * 20;
	} else {
        echo "20: 0<br>";
	}


        if($amount >= 10){
	$total = (int)($amount / 10);
	echo "10: $total<br>";
	$amount -= $total * 10;
	} else {
        echo "10: 0<br>";
	}


        if($amount >= 5){
	$total = (int)($amount / 5);
	echo "5: $total<br>";
	$amount -= $total * 5;
	} else {
        echo "5: 0<br>";
	}


        if($amount >= 2){
	$total = (int)($amount / 2);
	echo "2 $total<br>";
	$amount -= $total * 2;
	} else {
        echo "2: 0<br>";
	}


        if($amount >= 1){
	$total = (int)($amount / 1);
	echo "1 $total<br>";
	} else {
        echo "1: 0<br>";
	}


?>
