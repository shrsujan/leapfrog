<?php include_once(ROOT_PATH.'system/models/student.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/student_repository.class.php');?>


<?php

class AdminStudentController{

	private $student_repository;
	
	public function __construct(){
		$this->student_repository = new StudentRepository();
	}

	public function index(){
		include_once(ROOT_PATH.'views/admin/students/index.php');
	}

	public function add(){
		if(empty($_POST)){
			include_once(ROOT_PATH.'views/admin/students/add.php');		
		}
		else{
			$student = $this->_map_posted_data();
			$result_add = $this->student_repository->insert($student);
			header('location:index.php?page=astudent&success=true');
		}
	}

	private function _map_posted_data(){
		$student = new Student();
	
		$student->set_first_name($_POST['first_name']);
		$student->set_last_name($_POST['last_name']);
		$student->set_dob($_POST['dob']);
		$student->set_blood_group($_POST['blood_group']);
		$student->set_email($_POST['email']);
		$student->set_contact($_POST['contact']);
		$student->set_program_id($_POST['program_id']);

		return $student;
	}

	public function edit(){
		if(empty($_POST)){
			include_once(ROOT_PATH.'views/admin/students/edit.php');	
		}
		else{
			$student = $this->_map_posted_data();
			$student->set_id($_POST['id']);
			$result_edit = $this->student_repository->update($student);
			if($result_edit>0){
				header('location:index.php?page=astudent&update=true');
			}
			else{
				header('location:index.php?page=astudent&update=false');
			}

		}
	}

	public function delete(){
		if(isset($_GET['id'])){
		$this->student_repository->delete($_GET['id']);
		header('location:index.php?page=astudent');
	}
	
	}

}

$method = isset($_GET['m'])?$_GET['m']:'index';

$student_controller = new AdminStudentController();

switch ($method) {
	case 'add':
		$student_controller->add();
		break;
	case 'edit':
		$student_controller->edit();
		break;
	case 'delete':
		$student_controller->delete();
		break;
	default:
		$student_controller->index();
		break;
}