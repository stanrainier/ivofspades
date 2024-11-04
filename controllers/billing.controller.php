<?php 
require_once "../../models/billing.model.php";
class ControllerBilling{
	static public function billingSubmit(){

		if(isset($_POST["boarder"])){
			$table = "billing";
			$data = array("boarder_billed"=>$_POST["boarder"],
						"billDate"=>$_POST["bdate"],
						"billTime"=>$_POST["billtime"],
						"electricityBill"=>$_POST["electricitybill"],
						"waterBill"=>$_POST["waterbill"],
						"rentBill"=>$_POST["rentbill"],
						"additionalBill"=>$_POST["additional"],
						"totalBill"=>$_POST["totalBill"]);
			
			$answer = (new BillingModel)->mdlAddBilling($table,$data);
			   	if($answer == "ok"){
				echo'<script>
				alert("Billing submitted!");
			</script>
			';
				    
			}

		}
	}
	static public function ctrShowBills(){
		$answer = (new BillingModel)->mdlShowBill();
		return $answer;
	}
	static public function ctrShowBillsSpecific(){
		$answer = (new BillingModel)->mdlShowBillSpecific();
		return $answer;
	}





	

}

	

?>