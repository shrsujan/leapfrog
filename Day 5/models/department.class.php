<?php

class Department{

	private $id;
	private $name;
	private $hod;
	private $vhod;
	private $teacher;
	private $floor;

	public function initialize($id,$name,$hod,$vhod,$teacher,$floor){
		$this->id = $id;
		$this->name = $name;
		$this->hod = $hod;
		$this->vhod = $vhod;
		$this->teacher = $teacher;
		$this->floor = $floor;
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


	public function set_hod($hod){
		$this->hod = $hod;
	}

	public function get_hod(){
		return $this->hod;
	}


	public function set_vhod($vhod){
		$this->vhod = $vhod;
	}

	public function get_vhod(){
		return $this->vhod;
	}


	public function set_teacher($teacher){
		$this->teacher = $teacher;
	}

	public function get_teacher(){
		return $this->teacher;
	}


	public function set_floor($floor){
		$this->floor = $floor;
	}

	public function get_floor(){
		return $this->floor;
	}

}