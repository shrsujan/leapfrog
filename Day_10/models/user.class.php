<?php

class User{

	private $id;
	private $email;
	private $password;

	public function __construct(){

	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_email(){
		return $this->email;
	}
	
	public function set_email($email){
		$this->email = $email;
	}

	public function get_password(){
		return $this->password;
	}

	public function set_password($password){
		$this->password = $password;
	}
}