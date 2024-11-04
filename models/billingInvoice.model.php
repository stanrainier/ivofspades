<?php
require_once "connection.php";

class BillingInvoiceModel{
    static public function mdlShowBoarderBill($selected)
	{
		$connection = (new Connection)->connect();
		$stmt = $connection->prepare("SELECT * FROM billing WHERE boarder_billed = :boarder ORDER BY billDate DESC");
		$stmt->bindParam(":boarder", $selected, PDO::PARAM_STR);
		$stmt->execute();
	  
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	


}

?>