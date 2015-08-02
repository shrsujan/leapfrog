<?php

class TeacherRepository{

	private $db = null;

	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){

		$teacher_list = array();

		$this->db->connect();

		$sql = "SELECT * from tbl_teacher";
		$result = $this->db->fetchQuery($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				$teacher = new teacher();

				$teacher->set_id($row['id']);
				$teacher->set_first_name($row['first_name']);
				$teacher->set_last_name($row['last_name']);
				$teacher->set_contact($row['contact']);
				$teacher->set_salary($row['salary']);
				$teacher->set_department_id($row['department_id']);

				array_push($teacher_list, $teacher);
			}
		}
		$this->db->close();

		return $teacher_list;
	}

}