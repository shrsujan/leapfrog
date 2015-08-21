<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view("home/index");
	}

	public function contact(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('subject','subject','required');
		$this->form_validation->set_rules('message','message','required');

		if($this->form_validation->run()==false){
			$this->load->view("home/contact");
		}
		else{
			$this->db->insert('tbl_contacts',$this->posted_data());
			$this->send_mail();
			redirect(site_url()); //home ma jancha
		}

	}

	private function posted_data(){
		$data = array();

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');

		return $data;
	}

	private function send_mail(){
		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.subisu.net.np';
		$config['smtp_port'] = '25';

		$this->email->initialize($config);

		$this->email->from($this->input->post('email'));
		$this->email->to('shrsujan2007@gmail.com');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');

		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('message'));

		$this->email->send();
	}

}