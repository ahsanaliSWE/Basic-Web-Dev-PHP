<?php
          //Marksheet

       $maths = 60;
       $physics = 40;
       $chemistry = 80;
       $english = 30;
       $computer = 100;
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
       
?>