<?php

class UserRepository{

	private $db;

	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_user($email,$password){
		$this->db->connect();
		$user = null;

		$sql = "SELECT * from tbl_user WHERE email=? AND password=?";
		$stmt = $this->db->initStatement($sql);

		$stmt->bind_param("ss",$email,$password);
		$stmt->execute();
		$stmt->bind_result($id,$email,$password);

		while($stmt->fetch()){
			$user = new User();

			$user->set_id($id);
			$user->set_email($email);
		}

		$this->db->close();

		return $user;

	}

}