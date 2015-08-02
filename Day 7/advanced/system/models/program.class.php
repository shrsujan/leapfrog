<?php

class Program{

	private $id;
	private $name;
	private $no_of_subjects;
	private $department_id;

	public function __construct(){

	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_name(){
		return $this->name;
	}

	public function set_name($name){
		$this->name = $name;
	}


	public function get_no_of_subjects(){
		return $this->no_of_subjects;
	}

	public function set_no_of_subjects($no_of_subjects){
		$this->no_of_subjects = $no_of_subjects;
	}


	public function get_department_id(){
		return $this->department_id;
	}

	public function set_department_id($department_id){
		$this->department_id = $department_id;
	}

}