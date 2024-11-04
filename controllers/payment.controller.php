<?php 
require_once "../../models/payment.model.php";

class ControllerPayment{
    static public function addPayment() {
        if(isset($_POST["billingID"]) || isset($_POST["save"])) {
            $table = "payments";
            $data = array(
                "billingID" => $_POST["billingID"],
                "paymentDate" => $_POST["bdate"],
                "paymentTime" => $_POST["billtime"],
                "boarder" => $_POST["boarder"],
                "electricitybill" => $_POST["electricitybill"],
                "waterbill" => $_POST["waterbill"],
                "rentbill" => $_POST["rentbill"],
                "additional" => $_POST["additional"],
                "totalBill" => $_POST["totalBill"],
                "balance" => $_POST["balance"],
                "cashTendered" => $_POST["cashTendered"]
            );

            $answer = (new PaymentModel)->mdlAddPayment($table, $data);
            if($answer == "ok") {
                echo '
                    <script>
                        Swal.fire({
                            title: "Payment details successfully recorded!",
                            icon: "success",
                            confirmButtonText: "Proceed",
                            confirmButtonClass: "btn btn-outline-success",
                            allowOutsideClick: false,
                            buttonsStyling: false,
                        }).then(function(result) {
                            if(result.value) {
                                window.location = "printBill.php";
                            }
                        });
                    </script>';
            }
        }
    }
        static public function updateBalanceController(){
            if(isset($_POST["billingID"]) || isset($_POST["save"])){
			$table = "billing";
			$data = array("balance"=>$_POST["balance"],
						"bill_id"=>$_POST["billingID"]);
			
			$answer = (new PaymentModel)->updateBalance($table,$data);
			   	if($answer == "ok"){
				echo'<script>
                    alert("Balance Updated");
                    console.log("Balance Updated");
			    </script>';    
			}
        }
		}
		static public function ctrShowPayments(){
			$answer = (new PaymentModel)->mdlShowPayments();
			return $answer;
		}

        static public function ctrShowBoarderPayments()
        {
            $selected = $_POST["selected"];
            // $selected = "Stan Rainier Salazar";
        
            $answer = (new PaymentModel)->mdlShowBoarderPayment($selected);
        
            // var_dump($answer); // Debugging statement
        
            return $answer;
        }
    }


        
	



?>