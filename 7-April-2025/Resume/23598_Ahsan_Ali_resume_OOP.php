<?php
    class Resume{

        public $name;
        public $email;
        public $phone;
        public $address;
        public $education;
        public $skills;
        public $experience;

        public function setDetails($name, $email, $phone, $address, $education, $skills, $experience){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;
            $this->education = $education;
            $this->skills = $skills;
            $this->experience = $experience;
        }

        public function displayResume(){
            echo "<h2>Name: ".$this->name."</h2>";
            echo "<p>Email: ".$this->email."</p>";
            echo "<p>Phone: ".$this->phone."</p>";
            echo "<p>Address: ".$this->address."</p>";
        }

        public function displayEducation(){
            echo "<h2>Education</h2>";
            foreach($this->education as $edu){
                echo "<p>".$edu."</p>";
            }
        }
        public function displaySkills(){
            echo "<h2>Skills</h2>";
            foreach($this->skills as $skill){
                echo "<p>".$skill."</p>";
            }
        }

        public function displayExperience(){
            echo "<h2>Experience</h2>";
            foreach($this->experience as $exp){
                echo "<p>".$exp."</p>";
            }
        }
        
    }

    /*-----------Object 1-------------- */
    echo "<h1>Resume 1</h1>";
    $resume = new Resume();
    $resume->setDetails("Ahsan Ali", "ahsanali@gmail.com", "03229057739", "Jamshoro, Pakistan", 
    ["B.E Software Engineering (2020 - 2024) - MUET, Jamshoro", 
    "Intermediate (2020) - The Educators College, Jamshoro", 
    "Matriculation (2018) - The Educators School, Jamshoro"], 
    ["Flutter", 
    "Dart", 
    "JavaScript", 
    "HTML", 
    "CSS", 
    "Bootstrap"], 
    ["Freelancer (Fiverr) - Developed a Flutter application with Google Maps API for CRUD operations on Points of Interest (POIs)",
    "MUET Alumni Development Cell - Built a Flutter & Firebase mobile app for MUET, improving user engagement and Developed a Node.js API for backend services"]);
    $resume->displayResume();
    $resume->displayEducation();
    $resume->displaySkills();
    $resume->displayExperience();
    echo "<hr>";

    /*-----------Object 2-------------- */
    echo "<h1>Resume 2</h1>";

    $resume2 = new Resume();

    $resume2->setDetails("Zainab Fatima", "zainab.fatima@example.com", "03001234567", "Karachi, Pakistan", 
    ["B.S Computer Science (2019 - 2023) - FAST-NUCES, Karachi", 
     "Intermediate (2019) - Bahria College, Karachi", 
     "Matriculation (2017) - Beaconhouse School System, Karachi"], 
    ["Python", 
     "C++", 
     "SQL", 
     "React", 
     "Node.js", 
     "Tailwind CSS"], 
    ["Intern (Systems Limited) - Worked on building RESTful APIs using Node.js and integrated them with React front-end",
     "University Final Year Project - Developed an AI-based chatbot using Python and integrated it with a web interface for mental health support",
     "Freelance Developer - Created a personal finance tracking web app using React and Firebase for real-time data sync"]);
    $resume2->displayResume();
    $resume2->displayEducation();   
    $resume2->displaySkills();
    $resume2->displayExperience();
    echo "<hr>";

    /*-----------Object 3-------------- */
    echo "<h1>Resume 3</h1>";

    $resume->setDetails("Hassan Raza", "hassan.raza@example.com", "03111223344", "Lahore, Pakistan", 
    ["B.S Information Technology (2018 - 2022) - Punjab University, Lahore", 
     "Intermediate (2018) - Government College, Lahore", 
     "Matriculation (2016) - The City School, Lahore"], 
    ["Java", 
     "Spring Boot", 
     "MySQL", 
     "JavaScript", 
     "HTML", 
     "CSS"], 
    ["Intern (Techlogix) - Assisted in developing a Java-based ERP system with Spring Boot framework",
     "Freelance Web Developer - Created dynamic portfolio websites for local clients using JavaScript and Bootstrap",
     "Final Year Project - Developed a Hospital Management System with secure patient data access and real-time appointment booking"]);
    $resume->displayResume();
    $resume->displayEducation();
    $resume->displaySkills();
    $resume->displayExperience();
    echo "<hr>";

    /*-----------Object 4-------------- */
    echo "<h1>Resume 4</h1>";

    $resume4 = new Resume();

    $resume4->setDetails("Areeba Khan", "areeba.khan@example.com", "03459876543", "Islamabad, Pakistan", 
    ["B.S Software Engineering (2021 - 2025) - COMSATS University, Islamabad", 
     "Intermediate (2021) - Roots International College, Islamabad", 
     "Matriculation (2019) - Pak-Turk Maarif School, Islamabad"], 
    ["C#", 
     ".NET", 
     "SQL Server", 
     "Angular", 
     "HTML", 
     "CSS"], 
    ["Intern (NADRA Technologies Ltd) - Contributed to a C# .NET-based application for identity verification",
     "Hackathon Winner - Built a smart city simulation using Angular and IoT APIs",
     "COMSATS Final Year Project - Designed a secure e-voting system using blockchain principles in .NET"]);
    $resume4->displayResume();
    $resume4->displayEducation();
    $resume4->displaySkills();
    $resume4->displayExperience();
?>