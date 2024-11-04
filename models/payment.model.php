<?php
require_once "connection.php";

class PaymentModel{
	static public function mdlAddPayment($table, $data){
		$payment_id = (new Connection)->connect()->prepare("SELECT CONCAT('P', LPAD((count(id)+1),4,'0')) as gen_id FROM payments FOR UPDATE");

		$payment_id->execute();
		$payment_id = $payment_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(payment_id, billing_id, paymentDate, paymentTime, boarder_name, electricity_bill, water_bill, rent_bill, additional_bill, totalBill, balance, cashTendered) 
        VALUES(:payment_id, :billing_id, :paymentDate, :paymentTime, :boarder, :electricitybill, :waterbill, :rentbill, :additional, :totalBill, :balance, :cashTendered)");

		$stmt->bindParam(":payment_id", $payment_id[0]['gen_id'], PDO::PARAM_STR); 
		$stmt->bindParam(":billing_id", $data['billingID'], PDO::PARAM_STR); 
		$stmt->bindParam(":paymentDate", $data['paymentDate'], PDO::PARAM_STR);
		$stmt->bindParam(":paymentTime", $data['paymentTime'], PDO::PARAM_STR);
		$stmt->bindParam(":boarder", $data['boarder'], PDO::PARAM_STR);
		$stmt->bindParam(":electricitybill", $data['electricitybill'], PDO::PARAM_INT);
		$stmt->bindParam(":waterbill", $data['waterbill'], PDO::PARAM_INT);
		$stmt->bindParam(":rentbill", $data['rentbill'], PDO::PARAM_INT);
		$stmt->bindParam(":additional", $data['additional'], PDO::PARAM_STR);
		$stmt->bindParam(":totalBill", $data['totalBill'], PDO::PARAM_INT);
		$stmt->bindParam(":balance", $data['balance'], PDO::PARAM_INT);
		$stmt->bindParam(":cashTendered", $data['cashTendered'], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}
    static public function updateBalance($table, $data){
        $stmt = (new Connection)->connect()->prepare("UPDATE $table SET totalBill = :balance WHERE bill_id = :billing_id");
        
		$stmt->bindParam(":balance", $data['balance'], PDO::PARAM_INT);
        $stmt->bindParam(":billing_id", $data['bill_id'], PDO::PARAM_STR); 

        
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt->close();
        $stmt = null;

    }     
	static public function mdlShowPayments(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM payments ORDER BY payment_id DESC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	 

	// static public function mdlShowBoarders(){
	// 	$stmt = (new Connection)->connect()->prepare("SELECT * FROM boarders ORDER BY boarderid");
	// 	$stmt -> execute();
	// 	return $stmt -> fetchAll();
	// 	$stmt -> close();
	// 	$stmt = null;
	// }	
    static public function mdlShowBoarderPayment($selected)
	{
		$connection = (new Connection)->connect();
		$stmt = $connection->prepare("SELECT * FROM payments WHERE boarder_name = :boarder ORDER BY payment_id DESC");
		$stmt->bindParam(":boarder", $selected, PDO::PARAM_STR);
		$stmt->execute();
	  
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	

	
}

?>