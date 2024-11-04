<?php
require('fpdf/fpdf.php');
$currentDateTime = date('Y-m-d H:i:s');
require_once ("../../controllers/billingInvoice.controller.php");
$bill = (new ControllerBillingInvoice)->ctrShowBoarderBill();
$finalTotal = 0; // Initialize the total variable
$iterator = 0;
foreach ($bill as $key => $value) {
    $iterator++;
    $finalTotal += $value["totalBill"]; // Calculate the total by adding each total bill to the variable
    $Boarder = $_POST["boarder_billed"];
}

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set the font and size
$pdf->SetFont('Arial', '', 7);

// Add header
$pdf->Cell(0, 10, 'IV OF SPADES DORMITORY', 0, 1, 'C');
$pdf->Cell(0, 10, 'Boarder: '.$Boarder, 0, 1, 'C');
$pdf->Cell(0, 10, 'Invoice Issued: '.$currentDateTime, 0, 1, 'C'); 

// Add logo
$pdf->Image('../assets/img/brand/icon.png', 10, 10, 20, 20);

// Output the table headers
$pdf->Cell(15, 7, 'Bill ID', 1);
$pdf->Cell(30, 7, 'Boarder', 1);
$pdf->Cell(20, 7, 'Billing Date', 1);
$pdf->Cell(20, 7, 'Billing Time', 1);
$pdf->Cell(20, 7, 'Electricity Bill', 1);
$pdf->Cell(20, 7, 'Water Bill', 1);
$pdf->Cell(20, 7, 'Rent Bill', 1);
$pdf->Cell(25, 7, 'Additional Fee', 1);
$pdf->Cell(20, 7, 'Total', 1);

// Output the table rows
foreach ($bill as $value) {
    $pdf->Ln();
    $pdf->Cell(15, 7, $value["bill_id"], 1);
    $pdf->Cell(30, 7, $value["boarder_billed"], 1);
    $pdf->Cell(20, 7, $value["billDate"], 1);
    $pdf->Cell(20, 7, $value["billTime"], 1);
    $pdf->Cell(20, 7, $value["electricityBill"], 1);
    $pdf->Cell(20, 7, $value["waterBill"], 1);
    $pdf->Cell(20, 7, $value["rentBill"], 1);
    $pdf->Cell(25, 7, $value["additionalBill"], 1);
    $pdf->Cell(20, 7, $value["totalBill"], 1);
}

$pdf->Ln();
$pdf->Cell(15, 7, '', 1);
$pdf->Cell(30, 7, '', 1);
$pdf->Cell(20, 7, '', 1);
$pdf->Cell(20, 7, '', 1);
$pdf->Cell(20, 7, '', 1);
$pdf->Cell(20, 7, '', 1);
$pdf->Cell(20, 7, '', 1);
$pdf->SetFont('Arial', 'B', 9); // Set font to bold
$pdf->Cell(25, 7, 'Total:', 1);
$pdf->Cell(20, 7, $finalTotal, 1);

// Output the PDF
$pdf->Output("invoice.pdf","I");

?>

?>

