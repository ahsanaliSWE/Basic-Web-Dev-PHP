<?php
         //Calculator
         
       $num1 = 1000;
       $num2 = 500;
       $operator = '-';

       echo "Number_1 = $num1 <br>Number_2 = $num2<br>";       

      if ($operator == '+') {
          $result = $num1 + $num2;
          echo "Result: $num1 + $num2 = $result";
      } else if ($operator == '-') {
          $result = $num1 - $num2;
          echo "Result: $num1 - $num2 = $result";
      } else if ($operator == '*') {
          $result = $num1 * $num2;
          echo "Result: $num1 * $num2 = $result";
      } else if ($operator == '/') {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: $num1 / $num2 = $result";
         } else {
             echo "Error: Division by zero is not allowed.";
         }
       } else {
          echo "Error: Invalid operator. Use '+', '-', '*', or '/'";
       }
         
?>