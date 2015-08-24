<?php

class PublicController extends MY_Controller{

	protected $container;

	public function __construct(){
		parent::__construct();
		$this->container = "public/container";
	}

}