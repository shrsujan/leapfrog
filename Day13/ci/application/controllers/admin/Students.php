
 <?php

class Students extends AdminController{

	private $data = array();

	public function __construct(){
		parent::__construct();
		$this->data['view_page'] = "admin/dashboard/students/";
		$this->load->model('student_model');
	}

	public function index($offset=NULL){

		$this->load->library('pagination');

		$config = $this->admin_paginition_config();

		$limit = 2;
		$config['base_url'] = site_url('admin/students/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->student_model->count();
		$config['per_page'] = $limit;


		$this->pagination->initialize($config);

		$this->data['students'] = $this->student_model->get_students(NULL,'id desc',array('LIMIT'=>$config['per_page'],'OFFSET'=>$offset));
		$this->data['view_page'] .= "index";

		$this->load->view($this->_container,$this->data);
	}

	public function add(){
		if(!is_null($this->input->post('submit_btn'))){
			$this->student_model->insert('STUDENTS',$this->_map_posted_data());
			redirect(site_url('admin/students'));
			exit();
		}
		$this->data['view_page'] .= "add";
		$this->load->view($this->_container,$this->data);
	}

	public function edit($id){
		if(!is_null($this->input->post('submit_btn'))){
			$posted_data=$this->_map_posted_data();
			$this->student_model->update('STUDENTS',$this->_map_posted_data(),array('id'=>$posted_data['id']));
			
			redirect(site_url('admin/students'));
			exit();
		}
		$this->data['students'] = $this->student_model->get_students('id='.$id,NULL,array('LIMIT'=>NULL,'OFFSET'=>NULL));
		$this->data['view_page'] .="edit";
		$this->load->view($this->_container,$this->data); 
	}

	private function _map_posted_data(){
		$mapped_data['id'] = $this->input->post('id');
		$mapped_data['first_name'] = $this->input->post('first_name');
		$mapped_data['last_name'] = $this->input->post('last_name');
		$mapped_data['email'] = $this->input->post('email');
		$mapped_data['contact_no'] = $this->input->post('contact_no');
		$mapped_data['status'] = $this->input->post('status');

		return $mapped_data;
	}

	public function delete($id){
		$this->student_model->delete('STUDENTS','id='.$id);
		redirect(site_url('admin/students'));
		exit();
	}

	public function updateStatus($id=NULL,$status=NULL){
		if(!is_null($this->input->post('status_btn'))){
			if($status){
				$mapped_data['status'] = 0;
			}
			else{
				$mapped_data['status'] = 1;
			}
			$this->student_model->update('STUDENTS',$mapped_data,array('id'=>$id));
		
			redirect($_SERVER['HTTP_REFERER']);
			exit();
		}
		else{
			redirect(site_url('HTTP_REFERER'));
		}

	}

}