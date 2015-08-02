<?php

class Student{

	private $id;
	private $first_name;
	private $last_name;
	private $dob;
	private $blood_group;
	private $email;
	private $contact;
	private $program_id;

	public function __constuct(){

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

	public function get_dob(){
		return $this->dob;
	}
	
	public function set_dob($dob){
		$this->dob = $dob;
	}

	public function get_blood_group(){
		return $this->blood_group;
	}
	
	public function set_blood_group($blood_group){
		$this->blood_group = $blood_group;
	}

	public function get_email(){
		return $this->email;
	}
	
	public function set_email($email){
		$this->email = $email;
	}

	public function get_contact(){
		return $this->contact;
	}
	
	public function set_contact($contact){
		$this->contact = $contact;
	}
	
	public function get_program_id(){
		return $this->program_id;
	}
	
	public function set_program_id($program_id){
		$this->program_id = $program_id;
	}

}