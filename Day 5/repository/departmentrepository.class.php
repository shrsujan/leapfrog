<?php

class DepartmentRepository {

	private $department_list = array();

	public function add($department){
		array_push($this->department_list,$department);
	}

	public function get_all(){
		return $this->department_list;
	}

	public function delete($id){
		$delete_result = false;
		foreach ($this->department_list as $key => $department) {
			if($department->get_id() == $id){
				unset($this->department_list[$key]);
				$delete_result = true;
				break;
			}
		}
		return $delete_result;
	}

	public function get_by_id($id){
		$department_result = null;
		foreach ($this->department_list as $department) {
			if($department->get_id() == $id){
				$department_result = $department;
				break;
			}
		}
		return $department_result;
	}

}