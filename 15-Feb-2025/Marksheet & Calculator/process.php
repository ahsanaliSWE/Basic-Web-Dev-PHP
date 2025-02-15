<!DOCTYPE html>
<html>
<head>
	<title>Extended Mark Sheet & Calculator</title>
</head>

<body>
	<center>
	     <?php
		  if(isset($_POST['submit']))
		  {
		    echo "<h1>Marksheet</h1>";
		  }
		   elseif(isset($_POST['calculate']))
		  {
			echo "<h1>Calculator</h1>";
		  }
		   else{
			echo "<h1>Error</h1>";
		  }
	      ?>
		<hr/>
	      <?php

	if(isset($_POST['submit']))
        {

               $maths = $_POST['math'];
               $physics = $_POST['physics'];
               $chemistry = $_POST['chemistry'];
               $english = $_POST['english'];
               $computer = $_POST['computer'];
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

      ?> 	<p><strong>Maths</strong> = <?php echo "$maths";?><br/>
		  <strong>Physics</strong> = <?php echo "$physics";?><br/>
		  <strong>Chemistry</strong> = <?php echo "$chemistry";?><br/>
		  <strong>English</strong> = <?php echo "$english";?><br/>
		  <strong>Computer</strong> = <?php echo "$computer";?><br/><br/>
		  <strong>Total Marks</strong> = <?php echo "$totalMarks";?><br/>
		  <strong>Obtained Marks</strong> = <?php echo "$obtainedMarks";?><br/>
		  <strong>Percentage</strong> = <?php echo "$percentage"; ?>% out of 100%<br/>
		  <strong>Grade</strong> = <?php echo "$grade";?><br/>	
		</p>
	<?php
     
	   }
		
	?>

	<?php
	if(isset($_POST['calculate']))
      	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];

       		echo "Number_1 = $num1 <br/>Number_2 = $num2<br/>Operator = $operator<br/>";       

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

	}

	?>
		
	</center>
</body>
</html>