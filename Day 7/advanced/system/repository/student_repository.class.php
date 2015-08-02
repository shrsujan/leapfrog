<?php

// StudentRpository is the class that connects the class 'Student' with the 'db' class
// 'db' class connects to the database
// 'db' class does all the query processing in its functions
// those function are called from this class
// this class creates an object of class 'Student' and pushs it in its array
// this array is returned to the index.php file where the object of this class was made

class StudentRepository{

	private $db=null;
	
	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){

		$student_list = array();

		$this->db->connect();

		$sql = "SELECT * from tbl_student";
		$result = $this->db->fetchQuery($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				$student = new Student();

				$student->set_id($row['id']);
				$student->set_first_name($row['first_name']);
				$student->set_last_name($row['last_name']);
				$student->set_dob($row['dob']);
				$student->set_blood_group($row['blood_group']);
				$student->set_email($row['email']);
				$student->set_contact($row['contact']);
				$student->set_program_id($row['program_id']);

				array_push($student_list, $student);
			}
		}
		$this->db->close();

		return $student_list;	
	}



}