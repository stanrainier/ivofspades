<?php

class Connection{
	public function connect(){
		$link = new PDO("mysql:host=localhost:3307;dbname=ivofspades", "root", "");

		$link -> exec("set names utf8");
		return $link;
	}

}
