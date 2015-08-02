<?php

// departmentRpository is the class that connects the class 'department' with the 'db' class
// 'db' class connects to the database
// 'db' class does all the query processing in its functions
// those function are called from this class
// this class creates an object of class 'department' and pushs it in its array
// this array is returned to the index.php file where the object of this class was made

class DepartmentRepository{

	private $db=null;
	
	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){

		$department_list = array();

		$this->db->connect();

		$sql = "SELECT * from tbl_department";
		$result = $this->db->fetchQuery($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				$department = new department();

				$department->set_id($row['id']);
				$department->set_name($row['name']);
				$department->set_no_of_staff($row['no_of_staff']);
				$department->set_no_of_teachers($row['no_of_teachers']);
				$department->set_hod($row['hod']);
				$department->set_vhod($row['vhod']);

				array_push($department_list, $department);
			}
		}
		$this->db->close();

		return $department_list;	
	}



}