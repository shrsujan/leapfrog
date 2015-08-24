<?php

class Student extends MX_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "HMVC using MX_Controller";
	}

}