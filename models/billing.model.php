<?php
require_once "connection.php";

class BillingModel{
	static public function mdlAddBilling($table, $data){
		$bill_id = (new Connection)->connect()->prepare("SELECT CONCAT('BILL', LPAD((count(id)+1),4,'0')) as gen_id FROM billing FOR UPDATE");

		$bill_id->execute();
		$bill_id = $bill_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(bill_id, boarder_billed, billDate, billTime, electricityBill, waterBill, rentBill, additionalBill, totalBill) 
		VALUES(:bill_id, :boarder_billed, :billDate, :billTime, :electricityBill, :waterBill, :rentBill, :additionalBill, :totalBill)");

		$stmt->bindParam(":bill_id", $bill_id[0]['gen_id'], PDO::PARAM_STR); 
		$stmt->bindParam(":boarder_billed", $data['boarder_billed'], PDO::PARAM_STR);
		$stmt->bindParam(":billDate", $data['billDate'], PDO::PARAM_STR);
		$stmt->bindParam(":billTime", $data['billTime'], PDO::PARAM_STR);
		$stmt->bindParam(":electricityBill", $data['electricityBill'], PDO::PARAM_INT);
		$stmt->bindParam(":waterBill", $data['waterBill'], PDO::PARAM_INT);
		$stmt->bindParam(":rentBill", $data['rentBill'], PDO::PARAM_INT);
		$stmt->bindParam(":additionalBill", $data['additionalBill'], PDO::PARAM_INT);
		$stmt->bindParam(":totalBill", $data['totalBill'], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}
	static public function mdlShowBill(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM billing ORDER BY bill_id DESC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	
	static public function mdlShowBillSpecific(){
		$bill_id = (new Connection)->connect()->prepare("SELECT CONCAT('BILL', LPAD((count(id)+1),4,'0')) as gen_id FROM billing FOR UPDATE");
		$bill_id->execute();
		$bill_id = $bill_id -> fetchAll(PDO::FETCH_ASSOC);
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM billing WHERE bill_id='$bill_id'");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	




}

?>