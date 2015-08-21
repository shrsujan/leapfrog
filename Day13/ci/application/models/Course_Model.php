<?php

class Course_Model extends MY_Model{

	public function __construct(){
		parent::__construct();

		$this->_TABLES = array('COURSES'=>'tbl_courses');
	}

	public function get_courses($where=NULL,$order_by=NULL){
		$this->db->select('*')->from($this->_TABLES['COURSES']);
		if(!is_null($where)){
			$this->db->where($where);
		}
		if(!is_null($order_by)){
			$this->db->order_by($order_by);
		}
		return $this->db->get();
	}

	public function count($where=NULL){

		if(!is_null($where)){
			$this->db->where($where);
		}
		$this->db->from($this->_TABLES['COURSES']);
		return $this->db->count_all_results();
	}

}