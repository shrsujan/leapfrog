<?php

class SubjectRepository {

	private $subject_list = array();

	public function add($subject){
		array_push($this->subject_list, $subject);
	}

	public function get_all(){
		return $this->subject_list;
	}

	public function get_by_id($id){
		$subject_result = null;
		foreach ($this->subject_list as $subject) {
			if($subject->get_id() == $id){
				$subject_result = $subject;
				break;
			}
		}
		return $subject_result;
	}

	public function delete($id){
		$delete_result = false;
		foreach ($this->subject_list as $key => $subject) {
			if($subject->get_id() == $id){
				unset($this->subject_list[$key]);
				$delete_result = true;
				break;
			}
		}
	}


}