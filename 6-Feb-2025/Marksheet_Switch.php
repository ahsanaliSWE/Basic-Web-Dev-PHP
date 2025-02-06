<?php
    // Marksheet in Switch

    $maths = 60;
    $physics = 40;
    $chemistry = 80;
    $english = 40;
    $computer = 100;
    $fail = false;
    $grade = '';

    $totalMarks = 500;
    $obtainedMarks = $maths + $physics + $chemistry + $english + $computer;

    if ($maths < 40 || $physics < 40 || $chemistry < 40 || $english < 40 || $computer < 40) {
        $fail = true;
    }
    
    $percentage = ($obtainedMarks * 100) / $totalMarks;

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
    
    echo "Maths = $maths <br> Physics = $physics <br> Chemistry = $chemistry <br> English = $english <br> Computer = $computer<br>";
    echo "<br>Total Marks = $totalMarks <br> Obtained Marks = $obtainedMarks";
    echo "<br>Percentage = $percentage% out of 100% <br> Grade = $grade";
?>
