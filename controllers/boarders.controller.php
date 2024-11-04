<?php 
require_once "../../models/boarders.model.php";

class ControllerBoarder{
	static public function addBoarder(){

		if(isset($_POST["bname"])){
			if (isset($_POST['bisactive'])){
			  $bisactive=$_POST['bisactive'];
			}else{
			  $bisactive="0";
			}
			$table = "boarders";
			$data = array("boarderid"=>$_POST["boarderid"],
						"bdate"=>$_POST["bdate"],
						"byear"=>$_POST["byear"],
						"bname"=>$_POST["bname"],
						"baddress"=>$_POST["baddress"],
						"bage"=>$_POST["bage"],
						"bbirthdate"=>$_POST["bbirthdate"],
						"buniversity"=>$_POST["buniversity"],
						"bcontactnum"=>$_POST["bcontactnum"],
						"bemail"=>$_POST["bemail"],
						"bstatus"=>$_POST["bstatus"],
						"bemergencyname"=>$_POST["bemergencyname"],
						"bemergencyrel"=>$_POST["bemergencyrel"],
						"bemergencynum"=>$_POST["bemergencynum"],
						"bisactive"=>$bisactive,
						"bgender"=>$_POST["bgender"]);
			
			$answer = (new BoarderModel)->mdlAddBoarder($table,$data);
			   	if($answer == "ok"){
				echo'<script>
                    Swal.fire({
			          title: "Boarder details successfully appended!",
			          icon: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "addboarder";
			          }
			        })
			    </script>';    
			}

		}
	}
	static public function ctrShowBoarders(){
		$answer = (new BoarderModel)->mdlShowBoarders();
		return $answer;
	}
    static public function ctrEditBoarder(){

		if(isset($_POST["bname"])){
			if (isset($_POST['bisactive'])){
			  $bisactive="1";
			}else{
			  $bisactive="0";
			}
			$table = "boarders";
			$data = array("id"=>$_POST["id"],
						"boarderid"=>$_POST["boarderid"],
						"bdate"=>$_POST["bdate"],
						"byear"=>$_POST["byear"],
						"bname"=>$_POST["bname"],
						"baddress"=>$_POST["baddress"],
						"bage"=>$_POST["bage"],
						"bbirthdate"=>$_POST["bbirthdate"],
						"buniversity"=>$_POST["buniversity"],
						"bcontactnum"=>$_POST["bcontactnum"],
						"bemail"=>$_POST["bemail"],
						"bstatus"=>$_POST["bstatus"],
						"bemergencyname"=>$_POST["bemergencyname"],
						"bemergencyrel"=>$_POST["bemergencyrel"],
						"bemergencynum"=>$_POST["bemergencynum"],
						"bisactive"=>$bisactive,
						"deactivationDate"=>$_POST["deactDate"],
						"bgender"=>$_POST["bgender"]);

            $answer = (new BoarderModel)->mdlEditBoarder($table, $data);

            if($answer == "ok"){
                echo'<script>
                    swal.fire({
                      title: "Boarder details successfully updated!",
                      type: "success",
                      confirmButtonText: "Proceed",
                      confirmButtonClass: "btn btn-outline-success",
                      allowOutsideClick: false,
                      buttonsStyling: false,
                    }).then(function(answer){
                      if(result.value) {
                        window.location = "editBoarder";
                      }
                    })
                </script>';    
            }
        }
    }

	static public function ctrDeactivate(){
			$data = $_POST["account"];
			$answer = (new BoarderModel)->mdlDeactivate($data);
			return $answer;

			if($answer == "ok"){
				echo'<script>
					swal.fire({
					  title: "Boarder Deactivated!",
					  type: "success",
					  confirmButtonText: "Proceed",
					  confirmButtonClass: "btn btn-outline-success",
					  allowOutsideClick: false,
					  buttonsStyling: false,
					}).then(function(answer){
					  if(result.value) {
						window.location = "deactivate.php";
					  }
					})
				</script>';    
			}

	}
}

?>