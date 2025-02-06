<?php
    // Calculator Switch
    
    $num1 = 100;
    $num2 = 50;
    $operator = '+';

    echo "Number_1 = $num1 <br>Number_2 = $num2<br>";
    
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;
        case '-':
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;
        case '*':
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            } else {
                echo "Error: Division by zero is not allowed.";
            }
            break;
        default:
            echo "Error: Invalid operator. Use '+', '-', '*', or '/'";
            break;
    }
?>
