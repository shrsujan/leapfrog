<?php

class SubjectRepository{

	private $db = null;

	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){

		$subject_list = array();

		$this->db->connect();
		
		$sql = "SELECT * from tbl_subject";
		$result = $this->db->fetchQuery($sql);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()){
				$subject = new Subject();

				$subject->set_id($row['id']);
				$subject->set_name($row['name']);
				$subject->set_code($row['code']);
				$subject->set_hours($row['hours']);
				$subject->set_program_id($row['program_id']);

				array_push($subject_list, $subject);
			}
		}

		$this->db->close();
		return $subject_list;

	}

}