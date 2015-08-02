<?php

class Subject{

	private $id;
	private $name;
	private $hours;
	private $teacher;
	private $code;


	public function initialize($id,$name,$hours,$teacher,$code){
		$this->id = $id;
		$this->name = $name;
		$this->hours = $hours;
		$this->teacher = $teacher;
		$this->code = $code;
	}


	public function set_id($id){
		$this->id = $id;
	}

	public function get_id(){
		return $this->id;
	}

	public function set_name($name){
		$this->name = $name;
	}

	public function get_name(){
		return $this->name;
	}

	public function set_hours($hours){
		$this->hours = $hours;
	}

	public function get_hours(){
		return $this->hours;
	}

	public function set_teacher($teacher){
		$this->teacher = $teacher;
	}

	public function get_teacher(){
		return $this->teacher;
	}

	public function set_code($code){
		$this->code = $code;
	}

	public function get_code(){
		return $this->code;
	}

}