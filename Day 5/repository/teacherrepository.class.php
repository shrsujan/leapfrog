<?php

class TeacherRepository {

	private $teacher_list = array();

	public function add($teacher){
		array_push($this->teacher_list, $teacher);
	}

	public function get_all(){
		return $this->teacher_list;
	}

	public function get_by_id($id){
		$teacher_result = null;
		foreach ($this->teacher_list as $teacher) {
			if($teacher->get_id()==$id){
				$teacher_result = $teacher;
				break;
			}
		}
		return $teacher_result;
	}

	public function delete($id){
		$delete_result = false;
		foreach ($this->teacher_list as $key => $teacher) {
			if($teacher->get_id() == $id){
				unset($this->teacher_list[$key]);
				$delete_result = true;
				break;
			}
		}
		return $delete_result;
	}

}