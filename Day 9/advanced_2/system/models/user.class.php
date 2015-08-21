<?php

class User{

	private $username;
	private $password;

	public function __construct(){

	}

	public function get_username(){
		return $this->username;
	}

	public function set_username($username){
		$this->username = $username;
	}

	public function get_password(){
		return $this->password;
	}

	public function set_password($password){
		$this->username = $password;
	}

}