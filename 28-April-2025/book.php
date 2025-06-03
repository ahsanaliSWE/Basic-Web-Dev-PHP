<?php
require_once('require/database_connection.php');
require_once('fpdf/fpdf.php');

class PDF extends FPDF {
    public $headerTitle = '';

    function __construct($headerTitle = 'Title', $authorName = 'Author', $orientation = 'P', $unit = 'mm', $size = 'A4') {
        parent::__construct($orientation, $unit, $size);
        $this->headerTitle = $headerTitle;
        $this->author_name = $authorName;
    }

    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(95, 10, $this->headerTitle, 0, 0);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(95, 10, $this->author_name, 0, 0, 'R');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . " of {nb}", 0, 0, 'C');
    }
}

    if (!isset($_GET['id']) && !isset($_GET['dest'])) {
        die("<h1>Book ID and destination not provided.</h1>");
    }else {
        $id = $_GET['id'];
        $dest = $_GET['dest'];
    }

    $query = "SELECT * FROM books JOIN authors ON books.author_id = authors.author_id WHERE book_id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("<h1>Query failed: " . mysqli_error($connection) . "</h1>");
    }

    $books = mysqli_fetch_assoc($result);

    extract($books);

    $book_name = $title;

    $pdf = new PDF($title, $name);
    $pdf->AliasNbPages();

    $pdf->AddPage();
    $pdf->image("images/".$cover_img,0,0,210,297);
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->Ln(150);
    $pdf->setTextColor(255, 255, 255);  
    $pdf->Cell(0, 10, $title, 0, 1, 'C');
    $pdf->SetFont('Arial', 'I', 20);
    $pdf->Cell(0, 10, 'Author: ' . $name, 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Ln(200);
    $pdf->setTextColor(0, 0, 0);  


    $pdf->AddPage();
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(0, 10, 'INDEX', 0, 1, 'C');


    $query = "SELECT * FROM topics WHERE book_id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("<h1>Query failed: " . mysqli_error($connection) . "</h1>");
    }

    $pdf->SetXY(15,50);

    $topics = [];
    $topics_links = []; 

    while ($row = mysqli_fetch_assoc($result)) {
        $topics [] = $row; 
    }

    $sno = 1;
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(11, 10, 'S.No', 1, 0, 'C');
    $pdf->Cell(140, 10, 'Title', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Link', 1, 1, 'C');

    $pdf->SetX(15);
    foreach($topics as $topic) {

        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(11, 10, $sno++, 1, 0, 'C');
        $pdf->Cell(140, 10, $topic['title'], 1, 0);
        $pdf->SetFont('Arial', '', 12);
        $topic_links[] = $pdf->AddLink();
        $pdf->Cell(30, 10, 'Read Chapter', 1, 1, 'C', 0, $topic_links[count($topic_links) - 1]);
        $pdf->SetX(15);
    }


    
    foreach($topics as $index => $topic) {
        
        $pdf->AddPage();
        $pdf->SetY(25);   
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->SetLink($topic_links[$index]);
        $pdf->Cell(0, 10, $topic['title'], 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->MultiCell(0, 10, $topic['content'], 0, 'L');
        $pdf->Ln(10);

    }

    $pdf->AddPage();
    $pdf->SetY(150);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(0, 10, 'End of Book', 0, 1, 'C');

    
    $pdf->Output("$dest", "$book_name.pdf");
?>
