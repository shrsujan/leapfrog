<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/student.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/student_repository.class.php');?>
<?php include_once('header.php');?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="8" class="text-center">STUDENTS<button role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button></th>
	</tr>
	
	<tr>
		<th>Id</th>
		<th>Full Name</th>
		<th>DOB</th>
		<th>Blood Group</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Program</th>
		<th>Action</th>
	</tr>

	<?php

// an object of class 'StudentRepository' is made here
// there, it creates objects of 'db' class and 'Student' class
// all database function is in 'db' class and is accessed using the object
// setter functions of class 'Student' are accessed from the object of 'Student'
// they are used to set the values obtained from database to the private variable in 'Student'
// then multiple objects of 'Student' is stored in array in 'StudentRepository'
// that array is returned here using the object of 'StudentRepository'

	$student_info = new StudentRepository();
	foreach ($student_info->get_all() as $std) {
	?>
		<tr>
			<td><?php echo $std->get_id();?></td>
			<td><?php echo $std->get_first_name()." ".$std->get_last_name();?></td>																									
			<td><?php echo $std->get_dob();?></td>
			<td><?php echo $std->get_blood_group();?></td>
			<td><?php echo $std->get_email();?></td>
			<td><?php echo $std->get_contact();?></td>
			<td><?php echo $std->get_program_id();?></td>
			<td><button role="button" class="btn btn-sm btn-primary">Edit</button> <button role="button" class="btn btn-sm btn-danger">Delete</button></td>
		</tr>
	<?php	
	}
	?>

</table>
<?php include_once('footer.php');?>
