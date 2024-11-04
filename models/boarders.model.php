<?php
require_once "connection.php";

class BoarderModel{
	static public function mdlAddBoarder($table, $data){
		$boarder_id = (new Connection)->connect()->prepare("SELECT CONCAT('B', LPAD((count(id)+1),4,'0')) as gen_id FROM boarders FOR UPDATE");

		$boarder_id->execute();
		$boarder_id = $boarder_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(boarderid, sdate, syear, bname, baddress, bage, bbirthdate, buniversity, bcontact, bemail, bstatus, bemergencyname, bemergencyrel, bemergencynum, bisactive, bgender) VALUES(:boarderid, :sdate, :syear, :bname, :baddress, :bage, :bbirthdate, :buniversity, :bcontact, :bemail, :bstatus, :bemergencyname, :bemergencyrel, :bemergencynum, :bisactive, :bgender)");

		$stmt->bindParam(":boarderid", $boarder_id[0]['gen_id'], PDO::PARAM_STR); 
		$stmt->bindParam(":sdate", $data['bdate'], PDO::PARAM_STR);
		$stmt->bindParam(":syear", $data['byear'], PDO::PARAM_STR);
		$stmt->bindParam(":bname", $data['bname'], PDO::PARAM_STR);
		$stmt->bindParam(":baddress", $data['baddress'], PDO::PARAM_STR);
		$stmt->bindParam(":bage", $data['bage'], PDO::PARAM_INT);
		$stmt->bindParam(":bbirthdate", $data['bbirthdate'], PDO::PARAM_STR);
		$stmt->bindParam(":buniversity", $data['buniversity'], PDO::PARAM_STR);
		$stmt->bindParam(":bcontact", $data['bcontactnum'], PDO::PARAM_STR);
		$stmt->bindParam(":bemail", $data['bemail'], PDO::PARAM_STR);
		$stmt->bindParam(":bstatus", $data['bstatus'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencyname", $data['bemergencyname'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencyrel", $data['bemergencyrel'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencynum", $data['bemergencynum'], PDO::PARAM_STR);
		$stmt->bindParam(":bisactive", $data['bisactive'], PDO::PARAM_INT);
		$stmt->bindParam(":bgender", $data['bgender'], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}
	public function mdlShowBoarders() {
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM boarders ORDER BY boarderid DESC" );
		$stmt->execute();
		$boardersData = $stmt->fetchAll();
		$stmt->closeCursor();
		$stmt = null;
	
		return $boardersData;
	  }

	static public function mdlEditBoarder($table, $data){
        $stmt = (new Connection)->connect()->prepare("UPDATE $table SET boarderid = :boarderid, sdate = :sdate, syear = :syear, bname = :bname, baddress = :baddress, bage = :bage, bbirthdate = :bbirthdate, buniversity = :buniversity, bcontact = :bcontact, bemail = :bemail, bstatus = :bstatus, bemergencyname = :bemergencyname, bemergencyrel = :bemergencyrel, bemergencynum =:bemergencynum, bisactive = :bisactive, bgender = :bgender, deactivationDate = :deactivationDate WHERE id = :id");
		
		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":boarderid", $data['boarderid'], PDO::PARAM_STR); 
		$stmt->bindParam(":sdate", $data['bdate'], PDO::PARAM_STR);
		$stmt->bindParam(":syear", $data['byear'], PDO::PARAM_STR);
		$stmt->bindParam(":bname", $data['bname'], PDO::PARAM_STR);
		$stmt->bindParam(":baddress", $data['baddress'], PDO::PARAM_STR);
		$stmt->bindParam(":bage", $data['bage'], PDO::PARAM_INT);
		$stmt->bindParam(":bbirthdate", $data['bbirthdate'], PDO::PARAM_STR);
		$stmt->bindParam(":buniversity", $data['buniversity'], PDO::PARAM_STR);
		$stmt->bindParam(":bcontact", $data['bcontactnum'], PDO::PARAM_STR);
		$stmt->bindParam(":bemail", $data['bemail'], PDO::PARAM_STR);
		$stmt->bindParam(":bstatus", $data['bstatus'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencyname", $data['bemergencyname'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencyrel", $data['bemergencyrel'], PDO::PARAM_STR);
		$stmt->bindParam(":deactivationDate", $data['deactivationDate'], PDO::PARAM_STR);
		$stmt->bindParam(":bemergencynum", $data['bemergencynum'], PDO::PARAM_STR);
		$stmt->bindParam(":bisactive", $data['bisactive'], PDO::PARAM_INT);
		$stmt->bindParam(":bgender", $data['bgender'], PDO::PARAM_STR);
		
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt->close();
        $stmt = null;

    }       
	static public function mdlDeactivate($data)
	{
		$stmt = (new Connection)->connect()->prepare("UPDATE boarders SET bisactive = 0 WHERE boarder_id = $data");
		if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
		
		
	}
}

?>