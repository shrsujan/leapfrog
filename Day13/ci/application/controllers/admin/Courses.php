 <?php

class Courses extends AdminController{

	private $data = array();

	public function __construct(){
		parent::__construct();
		$this->data['view_page'] = "admin/dashboard/courses/";
		$this->load->model('course_model');
	}

	public function index($offset=NULL){
		$this->load->library('pagination');

		$config = $this->admin_paginition_config();

		$limit = 2;
		$config['base_url'] = site_url('admin/courses/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->course_model->count();
		$config['per_page'] = $limit;


		$this->pagination->initialize($config);
		$this->data['view_page'] .= "index";
		$this->data['courses'] = $this->course_model->get_courses();
		$this->load->view($this->_container,$this->data);
	}



}