<?php

class BaseController extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

}

class AdminController extends BaseController{

	public function __construct(){
		parent::__construct();
		/*if (!$this->check_login()) {
			redirect("Home");
			exit();
		}*/
	}

	private function check_login(){
		return false;
	}

}