<?php
	if(isset($_GET['success']) && $_GET['success']=="true"){
?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Success!</strong> New record added.
		</div>
<?php
	}
?>
<?php
	if(isset($_GET['error']) && $_GET['error']=="true"){
?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
      		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		<strong>Oh Snap!</strong> Failure in adding record.
		</div>
<?php
}
?>
<?php
	if(isset($_GET['update']) && $_GET['update']=="true"){
?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Success!</strong> Record updated.
		</div>
<?php
	}
	if(isset($_GET['update']) && $_GET['update']=="false"){
?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
      		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		<strong>Oh Snap!</strong> Failure in updating record.
		</div>
<?php
}
?>

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th colspan="8" class="text-center">STUDENTS<a href="index.php?page=astudent&m=add" role="button" class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></a></th>
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

	foreach ($this->student_repository->get_all("first_name asc") as $std) {
	?>
		<tr>
			<td><?php echo $std->get_id();?></td>
			<td><?php echo $std->get_first_name()." ".$std->get_last_name();?></td>																									
			<td><?php echo $std->get_dob();?></td>
			<td><?php echo $std->get_blood_group();?></td>
			<td><?php echo $std->get_email();?></td>
			<td><?php echo $std->get_contact();?></td>
			<td><?php echo $std->get_program_id();?></td>
			<td><a href="index.php?page=astudent&m=edit&id=<?php echo $std->get_id();?>" id="edit_btn" role="button" class="btn btn-sm btn-primary">Edit</a> <a href="index.php?page=astudent&m=delete&id=<?php echo $std->get_id();?>" role="button" name="delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
		</tr>
	<?php	
	}
	?>

</table>
