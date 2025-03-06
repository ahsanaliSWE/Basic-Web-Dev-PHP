<?php
     
     // Marksheet
     function marksheet($maths,$physics,$chemistry,$english,$computer){

       $fail;
       $grade;

       $totalMarks = 500;
       $obtainedMarks = $maths + $physics + $chemistry + $english + $computer;

       if($maths >= 40 && $physics >= 40 && $chemistry >= 40 && $english >= 40 && $computer >= 40)
       {
           $fail = FALSE;
       } else {
           $fail = TRUE;
       }
       
      $percentage = ($obtainedMarks * 100) / $totalMarks;
    
      if ($fail) {
          $grade = 'Fail';
      } else if ($percentage >= 80) {
          $grade = 'A+';
      } else if ($percentage >= 70) {
          $grade = 'A';
      } else if ($percentage >= 60) {
          $grade = 'B';
      } else if ($percentage >= 50) {
          $grade = 'C';
      } else if ($percentage >= 40) {
          $grade = 'D';
      }
      
      echo "Maths = $maths <br> Physics = $physics <br>Chemistry = $chemistry <br>English = $english <br>Computer = $computer<br>";
      echo "<br>Total Marks = $totalMarks <br>Obtained Marks = $obtainedMarks";
      echo "<br>Percentage = $percentage% out of 100% <br>Grade = $grade";
    }

     // Calculator Switch
    function calculator($num1,$num2,$operator = '+'){
 
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
    }
       
    // Sorting
    function sorting($arr){
            $count = 0;

            foreach($arr as $i => $value){
                $count++;
            }
            
            for ($i = 0; $i < $count - 1; $i++) {
                for ($j = 0; $j < $count - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            
        return $arr;
    }

    //Array Sum
    function myarray_sum($arr){
        $sum = 0;
        foreach($arr as $key => $value){
            if(!(($value >= 'A' && $value <= 'Z') || ($value >= 'a' && $value <= 'z'))){
                $sum += $value;
            }
        }
        return $sum;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Following Into Functions</title>
</head>
<body>
    <center>
        <h1>Sorting</h1>
        <hr />
        <?php
                $arr = [3,5,8,21,1,8,5];
                echo "Before: ";
                echo "<pre>";
                print_r($arr);
                echo "</pre>";
                echo "<br /> After: ";
                $arr = sorting($arr);
                echo "<pre>";
                print_r($arr);
                echo "</pre>";
        ?>
        <hr />
        <h1>Calculator</h1>
        <hr />
        <?php
               $num1 = 100;
               $num2 = 50;
               $operator = '+';
               calculator($num1,$num2,$operator);
    
        ?>
        <hr />
        <h1>Marksheet</h1>
        <hr />
        <?php
            $maths = 60;
            $physics = 40;
            $chemistry = 80;
            $english = 30;
            $computer = 100;

            marksheet($maths,$physics,$chemistry,$english,$computer);
        ?>
        <hr />
        <h1>Array Sum</h1>
        <hr />
        <?php
            $arr = [1,2,3,4,5,6,'A','B',10,20,'a','z'];
            echo "<h2>Array:</h2><br />";
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            echo "<br /><h2>Sum : ".myarray_sum($arr)."</h2>";        
        ?>
 
  

    </center>
    
</body>
</html>