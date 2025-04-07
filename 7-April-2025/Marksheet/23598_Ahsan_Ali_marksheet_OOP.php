<?php

class Marksheet{
    
    public $maths;
    public $physics;
    public $chemistry;
    public $english;
    public $computer;
    public $fail;
    public $grade;

    public $totalMarks = 500;
    public $obtainedMarks;

    public $percentage;

    public function setMarks($maths, $physics, $chemistry, $english, $computer){
        $this->maths = $maths;
        $this->physics = $physics;
        $this->chemistry = $chemistry;
        $this->english = $english;
        $this->computer = $computer;
    }

    public function calculateObtainedMarks(){
        $this->obtainedMarks = $this->maths + $this->physics + $this->chemistry + $this->english + $this->computer;
    }

    public function checkFail(){
        if($this->maths >= 40 && $this->physics >= 40 && $this->chemistry >= 40 && $this->english >= 40 && $this->computer >= 40){
            $this->fail = FALSE;
        } else {
            $this->fail = TRUE;
        }
    }

    public function calculatePercentage(){
        $this->percentage = ($this->obtainedMarks * 100) / $this->totalMarks;
    }

    public function assignGrade(){
        if ($this->fail) {
            $this->grade = 'Fail';
        } else if ($this->percentage >= 80) {
            $this->grade = 'A+';
        } else if ($this->percentage >= 70) {
            $this->grade = 'A';
        } else if ($this->percentage >= 60) {
            $this->grade = 'B';
        } else if ($this->percentage >= 50) {
            $this->grade = 'C';
        } else if ($this->percentage >= 40) {
            $this->grade = 'D';
        }
    }

    public function displayResult(){
        echo "Maths = $this->maths"; 
        echo "<br>Physics = $this->physics"; 
        echo "<br>Chemistry = $this->chemistry"; 
        echo "<br>English = $this->english"; 
        echo "<br>Computer = $this->computer<br>";
        echo "<br>Total Marks = $this->totalMarks"; 
        echo "<br>Obtained Marks = $this->obtainedMarks";
        echo "<br>Percentage = $this->percentage% out of 100%";
        echo "<br>Grade = $this->grade";
    }

}               

    $marksheet1 = new Marksheet();
    $marksheet1->setMarks(60, 40, 80, 40, 90);

    $marksheet1->calculateObtainedMarks();
    $marksheet1->checkFail();    
    $marksheet1->calculatePercentage();
    $marksheet1->assignGrade();
    $marksheet1->displayResult();

    echo "<br><hr>";

    $marksheet2 = new Marksheet();
    $marksheet2->setMarks(50, 40, 80, 39, 20);
    $marksheet2->calculateObtainedMarks();
    $marksheet2->checkFail();
    $marksheet2->calculatePercentage();
    $marksheet2->assignGrade();
    $marksheet2->displayResult();

    echo "<br><hr>";

    $marksheet3 = new Marksheet();
    $marksheet3->setMarks(60, 40, 70, 100, 100);
    $marksheet3->calculateObtainedMarks();
    $marksheet3->checkFail();
    $marksheet3->calculatePercentage();
    $marksheet3->assignGrade();
    $marksheet3->displayResult();


?>