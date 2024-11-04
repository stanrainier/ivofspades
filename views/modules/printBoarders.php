<?php
require('fpdf/fpdf.php');
require "../../controllers/boarders.controller.php";    

// Create a new PDF instance
$pdf = new FPDF('L');

// Add a new page to the PDF
$pdf->AddPage();

// Set font style and size
$pdf->SetFont('Arial', '', 6);

// Set cell widths
$cellWidth = 10;
$cellHeight = 4;

// Fetch data from your database or any other source
$boarders = (new ControllerBoarder)->ctrShowBoarders();

// Add header
$pdf->Cell(0, 10, 'Boarder List', 0, 1, 'C');

// Add table headers
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell($cellWidth, $cellHeight, 'Boarder ID', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Registration Date', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Year Level', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Name', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Address', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Age', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Gender', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Birthday', 1);
$pdf->Cell($cellWidth, $cellHeight, 'University', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Contact Number', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Email Address', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Status', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Emergency Contact', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Emergency Contact Number', 1);
$pdf->Cell($cellWidth, $cellHeight, 'Relationship to Emergency Contact', 1);
$pdf->Ln(); // Move to the next line

// Set font style and size back to default
$pdf->SetFont('Arial', '', 6);

// Loop through the data and add table rows
foreach ($boarders as $key => $value) {
    $pdf->Cell($cellWidth, $cellHeight, $value["boarderid"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["sdate"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["syear"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bname"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["baddress"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bage"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bgender"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bbirthdate"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["buniversity"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bcontact"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bemail"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bstatus"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bemergencyname"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bemergencynum"], 1);
    $pdf->Cell($cellWidth, $cellHeight, $value["bemergencyrel"], 1);
    $pdf->Ln(); // Move to the next line
}

// Output the PDF to the browser
$pdf->Output('Boarders.pdf', 'I');
?>
