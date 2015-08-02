<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/program.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/program_repository.class.php');?>
<?php include_once('header.php');?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="5" class="text-center">PROGRAMS<button role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button></th>
	</tr>
	
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>No of Subjects</th>
		<th>Department</th>
		<th>Action</th>
	</tr>

	<?php
	$program_info = new ProgramRepository();
	foreach ($program_info->get_all() as $prog) {
	?>
		<tr>
			<td><?php echo $prog->get_id();?></td>
			<td><?php echo $prog->get_name()?></td>			
			<td><?php echo $prog->get_code();?></td>
			<td><?php echo $prog->get_hours();?></td>
			<td><button role="button" class="btn btn-sm btn-primary">Edit</button> <button role="button" class="btn btn-sm btn-danger">Delete</button></td>
		</tr>
	<?php	
	}
	?>

</table>
<?php include_once('footer.php');?>
