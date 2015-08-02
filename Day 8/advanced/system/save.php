<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/student.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/student_repository.class.php');?>
<?php include_once('header.php');?>
<?php
	if(!isset($_POST['submit'])){
		header('location:student.php?error=nopage');
	}
?>
<?php
	$student = new Student();
	$student->set_first_name($_POST['first_name']);
	$student->set_last_name($_POST['last_name']);
	$student->set_dob($_POST['dob']);
	$student->set_blood_group($_POST['blood_group']);
	$student->set_email($_POST['email']);
	$student->set_contact($_POST['contact']);
	$student->set_program_id($_POST['program_id']);

	$student_repository = new StudentRepository();
	$result_add = 0;
	$result_edit = 0;
	if(!isset($_POST['id']) || $_POST['id']==''){
		$result_add = $student_repository->insert($student);
	}
	else{
		$student->set_id($_POST['id']);
		$result_edit = $student_repository->update($student);
	}

	if($result_add>0){
		header('location:student.php?success=true');
	}
	elseif ($result_edit>0) {
		header('location:student.php?update=true');
	}
	elseif ($result_edit==0){
		header('location:student.php?update=false');
	}
	else{
		header('location:student.php?error=true');
	}

?>
<?php include_once('footer.php');?>