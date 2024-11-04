<?php
ob_start(); // Start output buffering

require_once('fpdf/fpdf.php');
require_once('../../controllers/payment.controller.php');


// ...

// ...

// ...

class ReceiptPDF extends FPDF
{
  function Header()
  {
    $boarderName = $_POST["selected"];
    $this->SetFont('Arial', 'B', 16);
    $this->Cell(0, 10, 'Payments Invoice', 0, 1, 'C');
    $this->Ln(10);
    $this->Cell(0, 10, 'Boarder Name: '.$boarderName, 0, 1, 'C');
    $this->Ln(10);
  }

  // ...
  
  function GenerateReceipt()
  {
    // Set up the PDF document
    $pdf = new ReceiptPDF();
    $pdf->AddPage('L');
    $pdf->SetFont('Arial', '', 7); // Change the font size to 7

    // Add table headers
    $pdf->Cell(15, 6, 'Payment ID', 1);
    $pdf->Cell(15, 6, 'Billing ID', 1);
    $pdf->Cell(20, 6, 'Payment Date', 1);
    $pdf->Cell(20, 6, 'Payment Time', 1);
    $pdf->Cell(30, 6, 'Boarder', 1);
    $pdf->Cell(15, 6, 'Electricity', 1);
    $pdf->Cell(15, 6, 'Water', 1);
    $pdf->Cell(15, 6, 'Rent', 1);
    $pdf->Cell(20, 6, 'Additional Fee', 1);
    $pdf->Cell(15, 6, 'Total Bill', 1);
    $pdf->Cell(15, 6, 'Balance', 1);
    $pdf->Cell(20, 6, 'Cash Tendered', 1);
    $pdf->Ln();

    require_once('../../controllers/payment.controller.php');
    $bill = (new ControllerPayment())->ctrShowBoarderPayments();
    $finalTotal = 0; // Initialize the total variable
    $finalTotalBill = 0;
    $finalTendered = 0;
    foreach ($bill as $key => $value) {
      $pdf->Cell(15, 6, $value["payment_id"], 1);
      $pdf->Cell(15, 6, $value["billing_id"], 1);
      $pdf->Cell(20, 6, $value["paymentDate"], 1);
      $pdf->Cell(20, 6, $value["paymentTime"], 1);
      $pdf->Cell(30, 6, $value["boarder_name"], 1);
      $pdf->Cell(15, 6, $value["electricity_bill"], 1);
      $pdf->Cell(15, 6, $value["water_bill"], 1);
      $pdf->Cell(15, 6, $value["rent_bill"], 1);
      $pdf->Cell(20, 6, $value["additional_bill"], 1);
      $pdf->Cell(15, 6, $value["totalBill"], 1);
      $pdf->Cell(15, 6, $value["balance"], 1);
      $pdf->Cell(20, 6, $value["cashTendered"], 1);
      $pdf->Ln();

      $finalTotalBill += $value["totalBill"]; // Calculate the total by adding each total bill to the variable
      $finalTotal += $value["balance"]; // Calculate the total by adding each total bill to the variable
      $finalTendered += $value["cashTendered"]; // Calculate the total tendered by adding each cash tendered to the variable
    }

    // Add total row
    $pdf->Cell(15, 6, "", 0);
    $pdf->Cell(15, 6, "", 0);
    $pdf->Cell(20, 6, "", 0);
    $pdf->Cell(20, 6, "", 0);
    $pdf->Cell(30, 6, "", 0);
    $pdf->Cell(15, 6, "", 0);
    $pdf->Cell(15, 6, "", 0);
    $pdf->Cell(15, 6, "", 0);
    $pdf->SetFont('Arial', 'B', 9); // Set font to bold

    $pdf->Cell(20, 6, "Total", 1);
    $pdf->SetFont('Arial', 'B', 9); 
    $pdf->Cell(15, 6, $finalTotalBill, 1);
    $pdf->Cell(15, 6, $finalTotal, 1);
    $pdf->SetFont('Arial', 'B', 9); // Set font to bold
    $pdf->Cell(20, 6, $finalTendered, 1);
    $pdf->Ln();

    // Output the PDF
    $pdf->Output('receipt.pdf', 'I');
  }
}

// Usage:
$pdf = new ReceiptPDF();
$pdf->GenerateReceipt();
ob_end_flush(); // End output buffering


?>
