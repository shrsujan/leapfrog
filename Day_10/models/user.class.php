<?php

class User{

	private $email;
	private $password;

	public function __construct(){

	}

	public function get_id(){
		return $this->email;
	}

	public function set_id($id){
		$this->email = $email;
	}

	public function get_password(){
		return $this->password;
	}

	public function set_password($password){
		$this->password = $password;
	}
}