<?php 
require_once "../../models/billingInvoice.model.php";

class ControllerBillingInvoice{
static public function ctrShowBoarderBill()
	{
		$selected = $_POST["boarder_billed"];
	
		$answer = (new BillingInvoiceModel)->mdlShowBoarderBill($selected);
	
		// var_dump($answer); // Debugging statement
	
		return $answer;
	}
}