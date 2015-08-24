<?php

class AdminController extends MY_Controller{

	protected $container;

	public function __construct(){
		parent::__construct();
		$this->container = "adminPanel/container";
	}

}