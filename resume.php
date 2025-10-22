<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetLeftMargin(15);
$pdf->SetRightMargin(15);

// ===== HEADER =====
$pdf->SetTextColor(0, 51, 102); // dark blue for name
$pdf->SetFont('Arial','B',22);
$pdf->Cell(0,10,'Alwyn Sison Adriano',0,1,'C');

$pdf->SetTextColor(80, 80, 80);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(0,8,'Computer Science Student | Aspiring Software Developer',0,1,'C');
$pdf->Ln(3);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,'09763683414 |  adrianoalwyn@gmail.com',0,1,'C');
$pdf->Cell(0,6,'github.com/sis0n | linkedin.com/in/alwyn-adriano',0,1,'C');
$pdf->Ln(5);

// Divider line
$pdf->SetDrawColor(180,180,180);
$pdf->SetTextColor(0,0,0);

// ===== SUMMARY =====
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,'Summary',0,1);
$pdf->SetDrawColor(200,200,200);
$pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
$pdf->Ln(5);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,
    "A dedicated Computer Science student with solid knowledge in software development and web technologies. " .
    "Skilled in various programming languages and frameworks, with practical experience in creating applications " .
    "and working collaboratively through Git and GitHub. Eager to enhance technical expertise as a Software Engineer " .
    "and contribute to meaningful, real-world projects."
);
$pdf->Ln(6);

// ===== WORK EXPERIENCE =====
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,'Work Experience',0,1);
$pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
$pdf->Ln(4);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,'SPES - 2024 | Local Health Center',0,1);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,
    "Assisted at the local Health Center during the SPES 2024 program, performing clerical tasks, supporting staff " .
    "in daily operations, and engaging with community members. Gained valuable experience in teamwork, responsibility, " .
    "and effective communication."
);
$pdf->Ln(4);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,'SPES - 2025 | Internal Audit Services, City Hall',0,1);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,
    "Assisted at the Internal Audit Services (IAS) Office in Caloocan City Hall during the SPES 2025 program. " .
    "Performed various clerical and documentation tasks, organized audit-related files, and helped in verifying reports and financial records. " .
    "Gained practical experience in office management, data accuracy, and confidentiality while working in a government environment. " .
    "Developed strong organizational skills, attention to detail, and teamwork in a professional setting."
);
$pdf->Ln(5);

// ===== SKILLS =====
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,'Skills',0,1);
$pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
$pdf->Ln(4);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,
    "Programming Languages: C/C++, Java, PHP, JavaScript, HTML, CSS\n" .
    "Frameworks & Libraries: Laravel, Bootstrap, Node.js\n" .
    "Tools & Platforms: Git, GitHub, Figma, MS Word, MS Excel\n" .
    " Other Skills: UI/UX basics, Responsive Web Design"
);
$pdf->Ln(5);

// ===== EDUCATION =====
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,'Education',0,1);
$pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
$pdf->Ln(4);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,'Bachelor of Science in Computer Science',0,1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,6,'University of Caloocan City | August 2023 - Present',0,1);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,'Tech-Voc (With Honor, Best in Research Thesis)',0,1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,6,'SPCC | July 2021 - August 2023',0,1);
$pdf->Ln(5);

// ===== HOBBIES =====
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,'Hobbies',0,1);
$pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
$pdf->Ln(3);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,"Running, Gym, and Online games");

$pdf->Output();
?>
