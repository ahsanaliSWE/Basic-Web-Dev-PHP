<?php
          // Swap between two variables

   $a = 10;
   $b = 20;
   echo "<h1>Swap between two variables</h1>";
   echo "Before swapping \$a = $a, \$b = $b"."<br>";
   $a = $a + $b;
   $b = $a - $b;
   $a = $a - $b;
   echo "After swapping \$a = $a, \$b = $b";
?>