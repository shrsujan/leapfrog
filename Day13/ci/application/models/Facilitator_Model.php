<?php

class Facilitator_Model extends MY_Model{

	public function __construct(){
		parent::__construct();

		$this->_TABLES = array('FACILITATORS'=>'tbl_facilitators');
	}

	public function get_facilitators($where=NULL,$order_by=NULL,$limit=array('LIMIT'=>NULL,'OFFSET'=>NULL)){
		$this->db->select('*')->from($this->_TABLES['FACILITATORS']);
		if(!is_null($where)){
			$this->db->where($where);
		}
		if(!is_null($order_by)){
			$this->db->order_by($order_by);
		}
		if(!is_null($limit['LIMIT']) && !is_null($limit['OFFSET'])){
			$this->db->limit($limit['LIMIT'],$limit['OFFSET']);
		}
		elseif (!is_null($limit['LIMIT'])) {
			$this->db->limit($limit['LIMIT']);
		}

		return $this->db->get();

	}

	public function count($where=NULL){
		if(!is_null($where)){
			$this->db->where($where);	
		}
			$this->db->from($this->_TABLES['FACILITATORS']);
			return $this->db->count_all_results();
	}

}