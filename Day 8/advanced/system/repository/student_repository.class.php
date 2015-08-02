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

	public function get_all($order_by=null){

		$student_list = array();

		$this->db->connect();

		$sql = "SELECT * from tbl_student";
		if(!is_null($order_by)){
			$sql = $sql." ORDER BY ".$order_by;
		}
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

	public function insert($student){
		$this->db->connect();

		$sql = "INSERT INTO tbl_student(first_name,last_name,dob,blood_group,email,contact,program_id,modified_date) VALUES(?,?,?,?,?,?,?,?)";
		$stmt = $this->db->initStatement($sql);

		$first_name = $student->get_first_name();
		$last_name = $student->get_last_name();
		$dob = $student->get_dob();
		$blood_group = $student->get_blood_group();
		$email = $student->get_email();
		$contact = $student->get_contact();
		$program_id = $student->get_program_id();
		$modified_date = date('Y-m-d H:i:s');

		$stmt->bind_param("ssssssis",$first_name,$last_name,$dob,$blood_group,$email,$contact,$program_id,$modified_date);
		$result = $stmt->execute();
		
		$this->db->close();
		return $result;
	}

	public function delete($id){
		$this->db->connect();

		$sql = "DELETE from tbl_student WHERE id=?";
		$stmt = $this->db->initStatement($sql);

		$stmt->bind_param("i",$id);
		$result = $stmt->execute();
		
		$this->db->close();
		return $result;
	}

	public function update($student){
		$this->db->connect();

		$sql = "UPDATE tbl_student set first_name=?,last_name=?,dob=?,blood_group=?,email=?,contact=?,program_id=?,modified_date=? WHERE id=?";
		$stmt = $this->db->initStatement($sql);

		$first_name = $student->get_first_name();
		$last_name = $student->get_last_name();
		$dob = $student->get_dob();
		$blood_group = $student->get_blood_group();
		$email = $student->get_email();
		$contact = $student->get_contact();
		$program_id = $student->get_program_id();
		$modified_date = date('Y-m-d H:i:s');
		$id = $student->get_id();

		$stmt->bind_param("ssssssisi",$first_name,$last_name,$dob,$blood_group,$email,$contact,$program_id,$modified_date,$id);
		$result = $stmt->execute();
		
		$this->db->close();
		return $result;

	}

	public function get_by_id($id){
		$student = null;
		$this->db->connect();

		$sql = "SELECT id,first_name,last_name,dob,blood_group,email,contact,program_id from tbl_student WHERE id=?";
		$stmt = $this->db->initStatement($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id,$first_name,$last_name,$dob,$blood_group,$email,$contact,$program_id);

			while($stmt->fetch()){
				$student = new Student();

				$student->set_id($id);
				$student->set_first_name($first_name);
				$student->set_last_name($last_name);
				$student->set_dob($dob);
				$student->set_blood_group($blood_group);
				$student->set_email($email);
				$student->set_contact($contact);
				$student->set_program_id($program_id);
			}
		$this->db->close();

		return $student;	

		}

}