<?php include_once('../config.php');?>
<?php include_once(ROOT_PATH.'system/models/student.class.php');?>
<?php include_once(ROOT_PATH.'system/repository/student_repository.class.php');?>
<?php include_once('header.php');?>
<h1>Add Student</h1>
<form class="form-horizontal" action="save.php" method="post">
	<div class="form-group row">
		<div class="col-sm-6">
			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
		</div>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="dob" name="dob" placeholder="DOB - yyyy-mm-dd" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group" required>
		</div>
	</div>   
	<div class="form-group">
		<div class="col-sm-12">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
		</div>
	</div>   
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="contact" name="contact" placeholder="contact" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input type="text" class="form-control" id="program_id" name="program_id" placeholder="Program Id" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 row" style="margin-left:0">
			<a href="student.php"><input type="button" class="btn btn-danger" value="Cancel" name="cancel"/></a>
			<input type="submit" class="btn btn-success" value="Add" name="add"/>
		</div>
	</div>
</form>
<?php include_once('footer.php');?>
