<?php

class DBConnection{

	private $conn;

	public function connection(){
		$this->conn = new Mysqli (HOSTNAME,USERNAME,PASSWORD,DATABASE);
	}

	

}