<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/teacher.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/teacher_repository.class.php');?>
<?php include_once('header.php');?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="6" class="text-center">TEACHERS<button role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button></th>
	</tr>
	
	<tr>
		<th>Id</th>
		<th>Full Name</th>
		<th>Contact</th>
		<th>Salary</th>
		<th>Department</th>
		<th>Action</th>
	</tr>

	<?php
	$teacher_info = new TeacherRepository();
	foreach ($teacher_info->get_all() as $tch) {
	?>
		<tr>
			<td><?php echo $tch->get_id();?></td>
			<td><?php echo $tch->get_first_name()." ".$tch->get_last_name();?></td>			
			<td><?php echo $tch->get_contact();?></td>
			<td><?php echo $tch->get_salary();?></td>
			<td><?php echo $tch->get_department_id();?></td>
			<td><button role="button" class="btn btn-sm btn-primary">Edit</button> <button role="button" class="btn btn-sm btn-danger">Delete</button></td>
		</tr>
	<?php	
	}
	?>

</table>
<?php include_once('footer.php');?>
