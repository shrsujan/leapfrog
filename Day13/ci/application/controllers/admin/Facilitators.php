
 <?php

class Facilitators extends AdminController{

	private $data = array();

	public function __construct(){
		parent::__construct();
		$this->data['view_page'] = "admin/dashboard/facilitators/";
		$this->load->model('facilitator_model');
	}

	public function index($offset=NULL){

		$this->load->library('pagination');

		$config = $this->admin_paginition_config();

		$limit = 2;
		$config['base_url'] = site_url('admin/facilitators/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->facilitator_model->count();
		$config['per_page'] = $limit;


		$this->pagination->initialize($config);

		$this->data['facilitators'] = $this->facilitator_model->get_facilitators(NULL,'id desc',array('LIMIT'=>$config['per_page'],'OFFSET'=>$offset));
		$this->data['view_page'] .= "index";

		$this->load->view($this->_container,$this->data);
	}

	public function add(){
		if(!is_null($this->input->post('submit_btn'))){
			$this->facilitator_model->insert('FACILITATORS',$this->_map_posted_data());
			redirect(site_url('admin/facilitators'));
			exit();
		}
		$this->data['view_page'] .= "add";
		$this->load->view($this->_container,$this->data);
	}

	public function edit($id){
		if(!is_null($this->input->post('submit_btn'))){
			$posted_data=$this->_map_posted_data();
			$this->facilitator_model->update('FACILITATORS',$this->_map_posted_data(),array('id'=>$posted_data['id']));
			
			redirect(site_url('admin/facilitators'));
			exit();
		}
		$this->data['facilitators'] = $this->facilitator_model->get_facilitators('id='.$id,NULL,array('LIMIT'=>NULL,'OFFSET'=>NULL));
		$this->data['view_page'] .="edit";
		$this->load->view($this->_container,$this->data); 
	}

	private function _map_posted_data(){
		$mapped_data['id'] = $this->input->post('id');
		$mapped_data['first_name'] = $this->input->post('first_name');
		$mapped_data['last_name'] = $this->input->post('last_name');
		$mapped_data['email'] = $this->input->post('email');
		$mapped_data['contact_no'] = $this->input->post('contact_no');
		$mapped_data['course'] = $this->input->post('course');
		$mapped_data['status'] = $this->input->post('status');

		return $mapped_data;
	}

	public function delete($id){
		$this->facilitator_model->delete('FACILITATORS','id='.$id);
		redirect(site_url('admin/facilitators'));
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
			$this->facilitator_model->update('FACILITATORS',$mapped_data,array('id'=>$id));
		
			redirect($_SERVER['HTTP_REFERER']);
			exit();
		}
		else{
			redirect(site_url('HTTP_REFERER'));
		}

	}

}