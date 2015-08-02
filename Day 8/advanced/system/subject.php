<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/subject.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/subject_repository.class.php');?>
<?php include_once('header.php');?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="6" class="text-center">SUBJECTS<button role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button></th>
	</tr>
	
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Code</th>
		<th>Hours</th>
		<th>Program</th>
		<th>Action</th>
	</tr>

	<?php
	$subject_info = new SubjectRepository();
	foreach ($subject_info->get_all() as $sub) {
	?>
		<tr>
			<td><?php echo $sub->get_id();?></td>
			<td><?php echo $sub->get_name()?></td>			
			<td><?php echo $sub->get_code();?></td>
			<td><?php echo $sub->get_hours();?></td>
			<td><?php echo $sub->get_program_id();?></td>
			<td><button role="button" class="btn btn-sm btn-primary">Edit</button> <button role="button" class="btn btn-sm btn-danger">Delete</button></td>
		</tr>
	<?php	
	}
	?>

</table>
<?php include_once('footer.php');?>
