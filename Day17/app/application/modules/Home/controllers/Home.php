<?php

class Home extends PublicController{

	private $data;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['viewpage'] = "home/index";
		$this->load->view($this->container,$data);
	}

}