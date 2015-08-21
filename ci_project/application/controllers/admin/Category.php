<?php

class Category extends AdminController{

	public function __construct(){
		parent::__construct();
		$this->load->model("category_model");
	}

	public function index(){
		$data['categories'] = $this->category_model->getCategories();
		$this->load->view("admin/category/index",$data);
	}

}