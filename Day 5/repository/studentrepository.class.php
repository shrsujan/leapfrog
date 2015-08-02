<?php

// this class "StudentRepository" dedicates to the collection of the objects of class "Student"
// it also contains CRUD functions to Create, Read, Update, Delete the objects in the collection
// essential to work with database and provides flexibility when changing databases

class StudentRepository{


// creating an array, which is the only form of collection in php
// can later be replaced by database with fewer lines of codes needing a change

	private $student_list = array();

// all the CRUD operation along with get_all() and search() function

	public function add($student){
		array_push($this->student_list, $student);
	}

	public function get_all(){
		return $this->student_list;
	}

	public function search($param){

	}

	public function delete($id){
		$delete_result = false;
		foreach ($this->student_list as $key => $student){
			if($student->get_id() == $id){
				unset($this->student_list[$key]);
				$delete_result = true;
				break;
			}
		}
		return $delete_result;
	}

	public function get_by_id($id){
		$student_result = null;
		foreach ($this->student_list as $student) {
			if($student->get_id() == $id){
				$student_result = $student;
				break;
			}
		}
		return $student_result;
	}


}

// functions in this class is dependent of the functions in class "Student"
// get_id() and set_id() are functions in the class "Student"
// "student.class.php" and "studentrepository.class.php" both are included in "student.php"
// utilization of these classes and function will be done in "student.php"