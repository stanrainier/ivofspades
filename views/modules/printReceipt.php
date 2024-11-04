<?php
require_once "../../controllers/payment.controller.php";

$payment = new ControllerPayment();
$payment->addPayment();
$payment->updateBalanceController();
?>
<?php

require('fpdf/fpdf.php');


// Create a new FPDF object
$pdf = new FPDF();

// Add a new page to the PDF
$pdf->AddPage();

// Set the font style
$pdf->SetFont('Arial', 'B', 12);

// Set the receipt title
$pdf->Cell(0, 10, 'Receipt', 0, 1, 'C');

// Set the receipt information
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 10, 'Billing ID:', 0, 0);
$pdf->Cell(60, 10, $_POST['billingID'], 0, 1);

$pdf->Cell(40, 10, 'Payment Date:', 0, 0);
$pdf->Cell(60, 10, $_POST['bdate'], 0, 1);

$pdf->Cell(40, 10, 'Payment Time:', 0, 0);
$pdf->Cell(60, 10, $_POST['billtime'], 0, 1);

$pdf->Cell(40, 10, 'Boarder:', 0, 0);
$pdf->Cell(60, 10, $_POST['boarder'], 0, 1);

$pdf->Cell(40, 10, 'Electricity Bill:', 0, 0);
$pdf->Cell(60, 10, $_POST['electricitybill'], 0, 1);

$pdf->Cell(40, 10, 'Water Bill (Fixed):', 0, 0);
$pdf->Cell(60, 10, $_POST['waterbill'], 0, 1);

$pdf->Cell(40, 10, 'Rent Fee (Fixed):', 0, 0);
$pdf->Cell(60, 10, $_POST['rentbill'], 0, 1);

$pdf->Cell(40, 10, 'Additional Fees:', 0, 0);
$pdf->Cell(60, 10, $_POST['additional'], 0, 1);

$pdf->Cell(40, 10, 'Total:', 0, 0);
$pdf->Cell(60, 10, $_POST['totalBill'], 0, 1);

$pdf->Cell(40, 10, 'Balance:', 0, 0);
$pdf->Cell(60, 10, $_POST['balance'], 0, 1);

$pdf->Cell(40, 10, 'Cash Tendered:', 0, 0);
$pdf->Cell(60, 10, $_POST['cashTendered'], 0, 1);

// Output the PDF
$pdfData = $pdf->Output($_POST['billingID'].'receipt.pdf', 'S');

// Send the PDF data as a response
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="Bill.pdf"');
echo $pdfData;
?>
