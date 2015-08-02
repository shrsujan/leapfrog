<?php

class LoginRepository{

	private $db;

	public function __construct(){
		$this-db = new DBConnection();
	}

}