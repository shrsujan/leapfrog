<?php

// making a class student for multiple "student objects"

class Student {

	private $id;
	private $first_name;
	private $last_name;
	private $dob;
	private $blood_group;
	private $email;
	private $address;
	private $contact;
	private $program;

// constructor for this class (can be called using name of class "Student" as function as well)
// cannot overload constructor i.e. no multiple constructor with different parameters can be defined
// generally, constructor is left alone
// it is because initialization of the private variables of the class does not necessarily happen during object creation
	
	public function __construct(){

	}


//initialization of an object of class "Student" with all variables as parameters

	public function initialize($id,$first_name,$last_name,$dob,$blood_group,$email,$address,$contact,$program){
		$this->id = $id;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->dob = $dob;
		$this->blood_group = $blood_group;
		$this->email=$email;
		$this->address = $address;
		$this->contact = $contact;
		$this->program = $program;
	}


// setter and getter of all the varaibles of the class "Student"
// can be called individually during the update of the varibles

	public function set_id($id){
		$this->id=$id;
	}

	public function get_id(){
		return $this->id;
	}
	
	public function set_first_name($first_name){
		$this->first_name=$first_name;
	}
	
	public function get_first_name(){
		return $this->first_name;
	}

	public function set_last_name($last_name){
		$this->last_name=$last_name;
	}

	public function get_last_name(){
		return $this->last_name;
	}

	public function set_dob($dob){
		$this->dob=$dob;
	}

	public function get_dob(){
		return $this->dob;
	}

	public function set_blood_group($blood_group){
		$this->blood_group=$blood_group;
	}

	public function get_blood_group(){
		return $this->blood_group;
	}
	public function set_email($email){
		$this->email=$email;
	}

	public function get_email(){
		return $this->email;
	}

	public function set_address($address){
		$this->address=$address;
	}

	public function get_address(){
		return $this->address;
	}

	public function set_contact($contact){
		$this->contact=$contact;
	}

	public function get_contact(){
		return $this->contact;
	}

	public function set_program($program){
		$this->program=$program;
	}

	public function get_program(){
		return $this->program;
	}
}

// php tag not closed because there is nothing else in this file except for php class