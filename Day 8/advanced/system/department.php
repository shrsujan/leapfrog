<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/department.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/department_repository.class.php');?>
<?php include_once('header.php');?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="7" class="text-center">DEPARTMENT<button role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button></th>
	</tr>
	
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>No of Staff</th>
		<th>No of Teachers</th>
		<th>HOD</th>
		<th>VHOD</th>
		<th>Action</th>
	</tr>

	<?php

// an object of class 'DepartmentRepository' is made here
// there, it creates objects of 'db' clas and 'Department' class
// all database function is in 'db' class and is accessed using the object
// setter functions of class 'Department' are accessed from the object of 'Department'
// they are used to set the values obtained from database to the private variable in 'Department'
// then multiple objects of 'Department' is stored in array in 'DepartmentRepository'
// that array is returned here using the object of 'DepartmentRepository'

	$department_info = new DepartmentRepository();
	foreach ($department_info->get_all() as $dept) {
	?>
		<tr>
			<td><?php echo $dept->get_id();?></td>
			<td><?php echo $dept->get_name();?></td>																									
			<td><?php echo $dept->get_no_of_staff();?></td>
			<td><?php echo $dept->get_no_of_teachers();?></td>
			<td><?php echo $dept->get_hod();?></td>
			<td><?php echo $dept->get_vhod();?></td>
			<td><button role="button" class="btn btn-sm btn-primary">Edit</button> <button role="button" class="btn btn-sm btn-danger">Delete</button></td>
		</tr>
	<?php	
	}
	?>

</table>
<?php include_once('footer.php');?>
