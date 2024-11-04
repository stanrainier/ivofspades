<?php
      require_once "../../controllers/billing.controller.php";
        $addboarder = new ControllerBilling();
        $addboarder -> billingSubmit();
      ?> 
<?php
require('fpdf/fpdf.php');

// Retrieve form data
$bdate = $_POST['bdate'];
$billtime = $_POST['billtime'];
$boarder = $_POST['boarder'];
$electricitybill = $_POST['electricitybill'];
$waterbill = $_POST['waterbill'];
$rentbill = $_POST['rentbill'];
$additional = $_POST['additional'];
$totalBill = $_POST['totalBill'];

class PDF extends FPDF
{
    // Header function
    function Header()
    {
        // Select font and set page title
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'IV OF SPADES DORMITORY ', 0, 1, 'C');
        $this->Ln(10);
        $this->Cell(0, 10, 'Billing Receipt', 0, 1, 'C');
        $this->Ln(10);
    }

    // Footer function
    function Footer()
    {
        // Set footer text
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' of {nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages(); // Enable page numbering
$pdf->AddPage(); // Add a new page

// Output the form data
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Billing Date:', 0, 0);
$pdf->Cell(60, 10, $bdate, 0, 1);
$pdf->Cell(40, 10, 'Billing Time:', 0, 0);
$pdf->Cell(60, 10, $billtime, 0, 1);
$pdf->Cell(40, 10, 'Boarder:', 0, 0);
$pdf->Cell(60, 10, $boarder, 0, 1);
$pdf->Cell(40, 10, 'Electricity Bill:', 0, 0);
$pdf->Cell(60, 10, $electricitybill, 0, 1);
$pdf->Cell(40, 10, 'Water Bill (Fixed):', 0, 0);
$pdf->Cell(60, 10, $waterbill, 0, 1);
$pdf->Cell(40, 10, 'Rent Fee (Fixed):', 0, 0);
$pdf->Cell(60, 10, $rentbill, 0, 1);
$pdf->Cell(40, 10, 'Additional Fees:', 0, 0);
$pdf->Cell(60, 10, $additional, 0, 1);
$pdf->Cell(40, 10, 'Total:', 0, 0);
$pdf->Cell(60, 10, $totalBill, 0, 1);

// Generate the PDF
$pdfData = $pdf->Output('Boarders.pdf', 'S');

// Send the PDF data as a response
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="Bill.pdf"');
echo $pdfData;
