<?php

class ProgramRepository{

	private $db = null;

	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){

		$program_list = array();

		$this->db->connect();
		
		$sql = "SELECT * from tbl_program";
		$result = $this->db->fetchQuery($sql);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()){
				$program = new Program();

				$program->set_id($row['id']);
				$program->set_name($row['name']);
				$program->set_code($row['code']);
				$program->set_hours($row['hours']);
				$program->set_program_id($row['program_id']);

				array_push($program_list, $program);
			}
		}

		$this->db->close();
		return $program_list;

	}

}