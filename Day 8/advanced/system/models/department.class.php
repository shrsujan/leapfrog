<?php

class Department{

	private $id;
	private $name;
	private $no_of_staff;
	private $no_of_teachers;
	private $hod;
	private $vhod;

	public function __constuct(){

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

	public function get_no_of_staff(){
		return $this->no_of_staff;
	}
	
	public function set_no_of_staff($no_of_staff){
		$this->no_of_staff = $no_of_staff;
	}

	public function get_no_of_teachers(){
		return $this->no_of_teachers;
	}
	
	public function set_no_of_teachers($no_of_teachers){
		$this->no_of_teachers = $no_of_teachers;
	}

	public function get_hod(){
		return $this->hod;
	}
	
	public function set_hod($hod){
		$this->hod = $hod;
	}

	public function get_vhod(){
		return $this->vhod;
	}
	
	public function set_vhod($vhod){
		$this->vhod = $vhod;
	}

}