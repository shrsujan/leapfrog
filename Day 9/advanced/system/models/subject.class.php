<?php

class Subject{

	private $id;
	private $name;
	private $code;
	private $hours;
	private $program_id;

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


	public function get_code(){
		return $this->code;
	}

	public function set_code($code){
		$this->code = $code;
	}


	public function get_hours(){
		return $this->hours;
	}

	public function set_hours($hours){
		$this->hours = $hours;
	}


	public function get_program_id(){
		return $this->program_id;
	}

	public function set_program_id($program_id){
		$this->program_id = $program_id;
	}


}