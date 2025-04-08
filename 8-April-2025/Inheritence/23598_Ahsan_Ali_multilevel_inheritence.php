<?php

class Organization {
    public $orgName = "Higher Education Commission (HEC)";

    public function getOrg() {
        return "Organization: " . $this->orgName . "<br>";
    }
}


class University extends Organization {
    public $universityName = "Mehran University of Engineering & Technology";

    public function getUniversity() {
        return "University: " . $this->universityName . "<br>";
    }
}

class Department extends University {
    public $departmentName = "Software Engineering";

    public function getDepartment() {
        return "Department: " . $this->departmentName . "<br>";
    }
}

class Program extends Department {
    public $programName = "Bachelor of Engineering (BE)";
    public $duration = "4 years";

    public function getProgram() {
        return "Program: " . $this->programName . "<br>".
               "Duration: " . $this->duration . "<br>";
    }
}


class Student extends Program {
    public $studentName;
    public $rollNo;

    public function __construct($name, $roll) {
        $this->studentName = $name;
        $this->rollNo = $roll;
    }

    public function getStudent() {
        return "Student Name: " . $this->studentName . "<br>".
               "Roll No: " . $this->rollNo . "<br>";
    }
}


    $student1 = new Student("Ahsan Ali", "20SW135");


    echo $student1->getOrg();
    echo $student1->getUniversity();
    echo $student1->getDepartment();
    echo $student1->getProgram();
    echo $student1->getStudent();

?>
