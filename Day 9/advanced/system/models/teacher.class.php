<?php

class Teacher{

	private $id;
	private $first_name;
	private $last_name;
	private $contact;
	private $salary;
	private $department_id;

	public function __construct(){

	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_first_name(){
		return $this->first_name;
	}

	public function set_first_name($first_name){
		$this->first_name = $first_name;
	}

	public function get_last_name(){
		return $this->last_name;
	}

	public function set_last_name($last_name){
		$this->last_name = $last_name;
	}

	public function get_contact(){
		return $this->contact;
	}

	public function set_contact($contact){
		$this->contact = $contact;
	}

	public function get_salary(){
		return $this->salary;
	}

	public function set_salary($salary){
		$this->salary = $salary;
	}

	public function get_department_id(){
		return $this->department_id;
	}

	public function set_department_id($department_id){
		$this->department_id = $department_id;
	}

}