<?php

class DBConnection{

	private $conn = null;
	private $stmt = null;

	public function connect(){
		$this->conn = new Mysqli (HOSTNAME,USERNAME,PASSWORD,DATABASE);
	}

	public function initStatement($sql){
		$this->stmt = $this->conn->prepare($sql);
		return $this->stmt;
	}

	public function close(){
		if(!is_null($this->conn)){
			$this->conn->close();
			$this->conn = null;
		}
	}


}