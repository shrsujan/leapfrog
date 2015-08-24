<?php

class  Admin extends AdminController{

	private $data;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['viewpage'] = "admin/index";
		$this->load->view($this->container,$data);
	}

}