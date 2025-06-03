<?php

    require("fpdf186/fpdf.php");

    function GenerateCv($dest) {
    
    $cv = new FPDF();
    $cv->AddPage();

    $cv->setAuthor('Ahsan Ali Khidri');
    $cv->setTitle('CV - Ahsan Ali Khidri');
    
    
    /* title and links */

    $cv->setFillColor(192, 192, 192);
    $cv->Rect(0, 0, 66, 297, 'F');
    $cv->Image('img.png', 10, 10, 50, 50); 

    $cv->SetXY(70, 20);
    $cv->SetFont('times', 'B', 18);
    $cv->Cell(0, 5, 'Ahsan Ali Khidri', 0, 1);

    
    $cv->SetDrawColor(0, 102, 204);
    $cv->Line(70, 25, 200, 25);
    $cv->SetDrawColor(0, 0, 0);

    $cv->Ln(5);

    $cv->SetXY(70, 30);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(13, 6, 'Email:');
    $cv->SetFont('times', '', 12);
    $cv->Cell(60, 6, 'ahsanalime3@gmail.com');
    $cv->Ln();

    $cv->SetXY(70, 35);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(13, 6, 'Phone:');
    $cv->SetFont('times', '', 12);
    $cv->Cell(60, 6, '(+92) 3229057739');
    $cv->Ln();      

    $cv->SetXY(70, 40);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(17, 6, 'GitHub:');
    $cv->SetFont('times', '', 12);
    $cv->Cell(60, 6, 'github.com/ahsanaliSWE', 0, 1, 'L', 0,"https://github.com/ahsanaliSWE");
    $cv->Ln();

    $cv->SetXY(70, 45);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(19, 6, 'LinkedIn:');
    $cv->SetFont('times', '', 12);
    $cv->Cell(60, 6, 'linkedin.com/in/ahsanalikhidri', 0, 1, 'L', 0,"https://www.linkedin.com/in/ahsanalikhidri/");
    $cv->Ln();

    $cv->SetXY(70, 50);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(18, 6, 'Medium:');
    $cv->SetFont('times', '', 12);
    $cv->Cell(60, 6, 'medium.com/@ahsanalime3', 0, 1, 'L', 0,"https://medium.com/@ahsanalime3");
    $cv->Ln();

    $cv->SetXY(70, 56);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(17, 6, "Gender:");
    $cv->SetFont('times', '', 12);
    $cv->Cell(12, 6, "Male");
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(26, 6, "Date of Birth:");
    $cv->SetFont('times', '', 12);
    $cv->Cell(20, 6, "2/1/2003");
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(23, 6, "Nationality:");
    $cv->SetFont('times', '', 12);
    $cv->Cell(12, 6, "Pakistani");
    $cv->Ln(10);

    /* title and links */

    /* About Me Section */
    $cv->SetXY(38, 75);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'About Me', 0, 1);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 78, 200, 78);
    $cv->SetDrawColor(0, 0, 0);
    $cv->SetXY(70, 85);
    $cv->SetFont('times', '', 12);
    $cv->MultiCell(0, 7, 'A Software Engineer with experience in Flutter app development, Web development, Machine learning and Deep learning. Skilled in MySQL/Firebase for backend integration, Node.js for API creation, and Postman for API testing. Proficient in version control using Git/GitHub and UI/UX design using Figma. Passionate about building efficient, scalable applications.');
    
    $cv->Ln(10);

    /* About Me Section */

    /* Experience Section */

    $cv->SetXY(35, 137);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Experience', 0, 2);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 140, 200, 140);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(70, 136);
    $cv->SetFont('times', '', 10);
    $cv->SetXY(32, 145);
    $cv->Cell(40, 5, '[ Feb 2025 - Present ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Web Developer Intern', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'Hidaya Institute of Science and Technology', 0, 1);
    $cv->SetFont('times', '', 11);
    $cv->Cell(62, 5, '',);
    $cv->MultiCell(0, 5, 'Working on modern web development projects using PHP, MySQL and front-end technologies.');
    $cv->Ln(5);

    $cv->SetXY(28, 170);
    $cv->SetFont('times', '', 10);
    $cv->Cell(44, 5, '[ May 2024 - July 2024 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Flutter Developer (Freelancer)', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'Fiverr', 0, 1);
    $cv->SetFont('times', '', 11);
    $cv->Cell(62, 5, '',);
    $cv->MultiCell(0, 5, 'Developed Flutter apps using Google Maps API for POI management and media streaming platforms with real-time features and user engagement tools.');
    $cv->Ln(5);

    $cv->SetXY(30, 195);
    $cv->SetFont('times', '', 10);
    $cv->Cell(42, 5, '[ Jan 2024 - Apr 2024 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Mobile Application Developer', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'MUET Alumni Development Cell', 0, 1);
    $cv->SetFont('times', '', 11);
    $cv->Cell(62, 5, '',);
    $cv->MultiCell(0, 5, 'Built a Flutter mobile app integrated with Firebase backend. Developed APIs using Node.js for efficient app-backend communication.');
    $cv->Ln(5); 

    $cv->SetXY(29, 220);
    $cv->SetFont('times', '', 10);
    $cv->Cell(43, 5, '[ Mar 2023 - Jun 2023 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Web Developer', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'National Freelance Training Program', 0, 1);
    $cv->SetFont('times', '', 11);
    $cv->Cell(62, 5, '',);
    $cv->MultiCell(0, 5, 'Completed training focused on full-stack web development, including HTML, CSS, JavaScript, PHP, and MySQL. Built freelance-ready projects and learned client communication skills.');
    $cv->Ln(10);
    
    /* Experience Section */

   /* Education Section */

    $cv->SetXY(37, 250);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Education', 0, 2);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 253, 200, 253);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(42, 260);
    $cv->SetFont('times', '', 10);
    $cv->Cell(30, 5, '[ 2020 - 2024 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'B.E Software Engineering', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'Mehran University of Engineering and Technology (MUET), Jamshoro', 0, 1);
    $cv->Ln(5);

    $cv->addPage();
    $cv->setFillColor(192, 192, 192);
    $cv->Rect(0, 0, 66, 297, 'F');
    $cv->SetDrawColor(0, 0, 0);

    $cv->setXY(52, 10);
    $cv->SetFont('times', '', 10);
    $cv->Cell(20, 5, '[ 2020 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Intermediate', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'The Educators College, Jamshoro', 0, 1);
    $cv->Ln(5);

    $cv->SetXY(52, 23);
    $cv->SetFont('times', '', 10);
    $cv->Cell(20, 5, '[ 2018 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Matriculation', 0, 1);
    $cv->Cell(62, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'The Educators School, Jamshoro Campus', 0, 1);
    $cv->Ln(10);
    
   /* Education Section */

   /* Language Skills */

    $cv->SetXY(36, 38);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Languages', 0, 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 41, 200, 41);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(70, 43);
    $cv->SetFont('times', '', 12);
    $cv->MultiCell(0, 7, "Mother tongue(s): Urdu, Sindhi\nOther languages: English", 0, 'L');
    $cv->Ln(10);

    /* Language Skills */

    /* Volunteering Section */
    $cv->SetXY(31, 60);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Volunteering', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 63, 200, 63);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(36, 70);
    $cv->SetFont('times', '', 12);
    $cv->Cell(33, 5, '[2021 - Current]', 0,);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Member - Rotaract Club of Hyderabad Inspire', 0, 2);
    $cv->SetFont('times', '', 11);
    $cv->MultiCell(0, 7, "Participated in Community Service Projects i.e Blood Donation Drives, Ration Drives, Iftar Drives.\nHelps in organizing and managing club activities.\nBuilds friendships and expand professional network.\nParticipated in exchange programs, international service projects, and cultural activities that promote cross-cultural understanding and global cooperation\nEngaged myself in career development activities, share experiences, and collaborate on projects that contribute to my personal and professional growth.",0, 'L');
    $cv->Ln(5);

    $cv->SetXY(42, 135);
    $cv->Cell(28, 5, '[2020 - 2021]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(2, 5, 'Member - GDSC MUET Jamshoro', 0, 2);
    $cv->SetFont('times', '', 11);
    $cv->MultiCell(0, 7, "Participated in workshops and events organized by GDSC MUET Jamshoro.\nCollaborated with fellow members on projects and initiatives that promote technology and innovation.\nContributed to the development of a supportive community for students interested in technology and software development.",0, 'L');
    $cv->Ln(10);
    /* Volunteering Section */


    /* Conferences and Seminars Section */
    $cv->SetXY(0, 180);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Conferences and Seminars', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 183, 200, 183);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(46, 188);
    $cv->SetFont('times', '', 10);
    $cv->Cell(25, 5, '[ Dec 2024 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(105, 5, 'INMIC 2024 26th International Multi Topic Conference ', 0, 0);
    $cv->SetFont('times', 'I', 11);
    $cv->Cell(0, 5, ' - Karachi', 0, 1);
    $cv->Cell(61, 5, '',);
    $cv->SetFont('times', 'BI', 11);
    $cv->Cell(0, 5, 'Presented research paper: "AI-Powered Dental Caries Detection"', 0, 1);
    $cv->Ln(5);

    $cv->SetXY(52, 201);
    $cv->SetFont('times', '', 10);
    $cv->Cell(19, 5, '[ 2024 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(105, 5, 'Git Guru The Developer\'s Toolkit', 0, 1);
    $cv->Ln(5);

    $cv->SetXY(46, 210);
    $cv->SetFont('times', '', 10);
    $cv->Cell(25, 5, '[ Oct 2023 ]', 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(105, 5, 'TEDx MUET', 0, 1);
    $cv->Ln(10);

    /* Conferences and Seminars Section */

    /* Publications Section */
    $cv->SetXY(33, 225);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Publications', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 228, 200, 228);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(70, 233);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'AI Powered Dental Caries Detection (2024)', 0, 1);
    $cv->Ln(10);

    /* Publications Section */


    /* Projects Section */

    $cv->SetXY(42, 245);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Projects', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 248, 200, 248);
    $cv->SetDrawColor(0, 0, 0);
    
    $cv->SetXY(70, 253);
    $cv->SetFont('times', 'BI', 11);
    $cv->MultiCell(0, 7, "- Dental Caries Detection Mobile App (Flutter + TensorFlow + Firebase)\n- CV Maker Web Application (HTML, CSS, JS, PHP, MySQL)\n- COVID-19 Tracker Mobile App (Flutter + Firebase)", 0, 'L');
    $cv->Ln(10);

    /* Projects Section */

    $cv->addPage();
    $cv->setFillColor(192, 192, 192);
    $cv->Rect(0, 0, 66, 297, 'F');
    $cv->SetDrawColor(0, 0, 0);


    /* Certificates Section */
    $cv->SetXY(35, 10);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Certificates', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 13, 200, 13);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetFont('times', '', 10);

    $cv->SetXY(45, 20);
    $cv->Cell(30, 8, '[11/12/2024]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'Go Beyond the Numbers: Translate Data into Insights', 0, 1); 

    $cv->SetFont('times', '', 10);
    $cv->SetXY(45, 28);
    $cv->Cell(30, 8, '[07/12/2024]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'Foundations of Cybersecurity', 0, 1);

    $cv->SetFont('times', '', 10);
    $cv->SetXY(45, 36);
    $cv->Cell(30, 8, '[30/05/2024]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'Postman API Fundamentals Student Expert', 0, 1);

    $cv->SetFont('times', '', 10);
    $cv->SetXY(26, 44);
    $cv->Cell(49, 8, '[22/03/2023 - 07/07/2023]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'National Freelance Training Program on Technical Domain', 0, 1);

    $cv->SetFont('times', '', 10);
    $cv->SetXY(50, 52);
    $cv->Cell(25, 8, '[12/2022]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'Python Fundamentals for Beginners', 0, 1);

    $cv->SetFont('times', '', 10);
    $cv->SetXY(45, 60);
    $cv->Cell(30, 8, '[20/04/2021]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'National Financial Literacy Program for Youth', 0, 1);

    $cv->SetFont('times', '', 10);
    $cv->SetXY(45, 68);
    $cv->Cell(30, 8, '[10/04/2020]', 0, 0);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(130, 8, 'The Fundamentals of Digital Marketing', 0, 1);


    /* Certificates Section */

    /* Skills Section */
    $cv->SetXY(49, 80);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Skills', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 83, 200, 83);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(70, 88);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'Programming Languages', 0, 1);
    $cv->SetFont('times', '', 10);
    $cv->Cell(60, 5, '',);
    $cv->MultiCell(0, 5, 'C, C++, Python, Java, Dart, JavaScript, PHP, HTML, CSS');
    $cv->Ln(5);

    $cv->SetXY(70, 102);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'Frameworks and Libraries', 0, 1);
    $cv->SetFont('times', '', 10);
    $cv->Cell(60, 5, '',);
    $cv->MultiCell(0, 5, 'Flutter, TensorFlow, Node.js, Express.js, Bootstrap');
    $cv->Ln(5);

    $cv->SetXY(70, 116);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'Databases', 0, 1);
    $cv->SetFont('times', '', 10);
    $cv->Cell(60, 5, '',);
    $cv->MultiCell(0, 5, 'MySQL, Firebase');
    $cv->Ln(5);

    $cv->SetXY(70, 130);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'Tools and Technologies', 0, 1);
    $cv->SetFont('times', '', 10);
    $cv->Cell(60, 5, '',);
    $cv->MultiCell(0, 5, 'Git, GitHub, Postman, Figma, Visual Studio Code, Android Studio');
    $cv->Ln(5);

    $cv->SetXY(70, 144);
    $cv->SetFont('times', 'B', 12);
    $cv->Cell(0, 5, 'Soft Skills', 0, 1);
    $cv->SetFont('times', '', 10);
    $cv->Cell(60, 5, '',);
    $cv->MultiCell(0, 5, 'Teamwork, Communication, Problem-solving, Adaptability, Time management');
    $cv->Ln(5);
    /* Skills Section */


    /* Hobbies Section */
    $cv->SetXY(43, 157);
    $cv->SetFont('times', 'B', 16);
    $cv->Cell(0, 5, 'Hobbies', 0);
    $cv->SetDrawColor(0, 102, 204);
    $cv->line(70, 160, 200, 160);
    $cv->SetDrawColor(0, 0, 0);

    $cv->SetXY(70, 165);
    $cv->SetFont('times', 'B', 12);
    $cv->MultiCell(0, 8, "- Video Gaming\n- Drawing\n- Blog and article writing\n- Traveling\n- Tech tinkering", 0, 1);

    /* Hobbies Section */

    $cv->Output($dest, 'Ahsan_Ali_Khidri_CV.pdf');

    }

    if(isset($_REQUEST['view_cv'])) {
        GenerateCv("I");
    } else if(isset($_REQUEST['download_cv'])) {
        GenerateCv("D");
    }


?>

<?php

function generateBackground($rows, $cols) {
    $characters = '01'; 
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            echo $characters;
        }
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate PDF CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            color: #fff;
            overflow: hidden;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            color: #00ff00; 
            font-size: 10px;  
            line-height: 12px;
            white-space: pre-wrap; 
            text-align: center;
            opacity: 0.15;  
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 50px;
        }
        input[type="submit"] {
            padding: 12px 30px;
            font-size: 18px;
            background-color: #28a745; 
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838; 
        }
        p {
            font-size: 18px;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="background">
    <?php generateBackground(100, 200); ?>
</div>

<div class="content">
    <center>

        <h1>Ahsan Ali's CV</h1>
        
        <form method="POST">
            <input type="submit" name="view_cv" value="View PDF CV">
        </form>
        <br><br>

        <form method="POST">
            <input type="submit" name="download_cv" value="Download PDF CV">
        </form>
        
        <p>Click the button above to see or download CV PDF.</p>
    </center>
</div>

</body>
</html>
