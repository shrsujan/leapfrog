<?php
$student_repository = new StudentRepository();
$e = $student_repository->get_by_id($_GET['id']);
if(is_null($e)){
	header('location:index.php?page=astudent');
}
	
?>
<h1>Edit Student</h1>
<form class="form-horizontal" action="index.php?page=astudent&m=edit" method="post">
	<div class="form-group row">
		<div class="col-sm-6">
			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $e->get_first_name();?>" required>
		</div>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $e->get_last_name();?>" required>
		</div>	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="dob" name="dob" placeholder="DOB - yyyy-mm-dd" value="<?php echo $e->get_dob();?>" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group" value="<?php echo $e->get_blood_group();?>" required>
		</div>
	</div>   
	<div class="form-group">
		<div class="col-sm-12">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $e->get_email();?>" required>
		</div>
	</div>   
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="contact" name="contact" placeholder="contact" value="<?php echo $e->get_contact();?>" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="program_id" name="program_id" placeholder="Program Id" value="<?php echo $e->get_program_id();?>" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 row" style="margin-left:0">
			<a href="index.php?page=astudent"><input type="button" class="btn btn-danger" value="Cancel" name="cancel"/></a>
			<input type="submit" class="btn btn-success" value="Update" name="update"/>
		</div>
	</div>
	<input type="hidden" name="id" value="<?php echo $e->get_id();?>"/>
</form>
