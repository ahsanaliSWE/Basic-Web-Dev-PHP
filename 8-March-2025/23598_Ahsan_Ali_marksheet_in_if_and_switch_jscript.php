<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet in Javascript</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
    </style>
    <script>
        document.write("<h1>Marksheet in Javascript</h1><hr>");
        document.write("<h2>Marksheet in If else if</h2><hr>");

        var $maths = 60;
        var $physics = 40;
        var $chemistry = 80;
        var $english = 30;
        var $computer = 100;
        var $fail;
        var $grade;

        var $totalMarks = 500;
        var $obtainedMarks = $maths + $physics + $chemistry + $english + $computer;

        if($maths >= 40 && $physics >= 40 && $chemistry >= 40 && $english >= 40 && $computer >= 40)
        {
            $fail = false;
        } else {
            $fail = true;
        }
        
        var $percentage = ($obtainedMarks * 100) / $totalMarks;
     
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
        
        document.write("Maths = " + $maths + "<br> Physics = " + $physics + "<br>Chemistry = " + $chemistry + "<br>English = " + $english + "<br>Computer = " + $computer + "<br>");
        document.write("<br>Total Marks = " + $totalMarks + "<br>Obtained Marks = " + $obtainedMarks);
        document.write("<br>Percentage = " + $percentage + "% out of 100% <br>Grade = " + $grade);

        document.write("<hr/><h2>Marksheet in Switch</h2><hr />");


        var $maths = 60;
        var $physics = 40;
        var $chemistry = 80;
        var $english = 40;
        var $computer = 100;
        var $fail = false;
        var $grade;

        var $totalMarks = 500;
        var $obtainedMarks = $maths + $physics + $chemistry + $english + $computer;

        if ($maths < 40 || $physics < 40 || $chemistry < 40 || $english < 40 || $computer < 40) {
            $fail = true;
        }

        var $percentage = ($obtainedMarks * 100) / $totalMarks;

        switch (true) {
            case $fail:
                $grade = 'Fail';
                break;
            case $percentage >= 80:
                $grade = 'A+';
                break;
            case $percentage >= 70:
                $grade = 'A';
                break;
            case $percentage >= 60:
                $grade = 'B';
                break;
            case $percentage >= 50:
                $grade = 'C';
                break;
            case $percentage >= 40:
                $grade = 'D';
                break;
        }

        document.write("Maths = " + $maths + "<br> Physics = " + $physics + "<br>Chemistry = " + $chemistry + "<br>English = " + $english + "<br>Computer = " + $computer + "<br>");
        document.write("<br>Total Marks = " + $totalMarks + "<br>Obtained Marks = " + $obtainedMarks);
        document.write("<br>Percentage = " + $percentage + "% out of 100% <br>Grade = " + $grade);

    </script>
</head>
<body>
    
</body>
</html>