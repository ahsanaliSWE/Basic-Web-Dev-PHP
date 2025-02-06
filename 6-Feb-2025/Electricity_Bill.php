<?php
    // Electricity bill
       
        $units = 340;    
 	$bill;

        if ($units <= 100) {
            $bill = $units * 5;
        } elseif ($units <= 200) {
            $bill = (100 * 5) + ($units - 100) * 10;
        } elseif ($units <= 300) {
            $bill = (100 * 5) + (100 * 10) + ($units - 200) * 15;
        } else {
            $bill = (100 * 5) + (100 * 10) + (100 * 15) + ($units - 300) * 25;
        }
    
    echo "Units: $units <br>";
    echo "Total Bill: $bill";
?>
