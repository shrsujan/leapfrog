 <?php

class Enquiries extends AdminController{

	private $data = array();

	public function __construct(){
		parent::__construct();
		$this->data['view_page'] = "admin/dashboard/enquiries/";
	}

	public function index(){
		$this->data['view_page'] .= "index";

		$this->load->view($this->_container,$this->data);
	}

}