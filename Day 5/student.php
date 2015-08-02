<?php
	
	require_once('models/student.class.php');
	require_once('repository/studentrepository.class.php');

	$repository = new StudentRepository();

	$student1 = new Student();
	$student1->initialize(1,"Sujan","Shrestha","2050/03/28","b+ve","shrsujan2007@gmail.com","Teku",9849209514,"BCT");
	$repository->add($student1);

	$student2 = new Student();
	$student2->initialize(2,"Pratish","Bahadur Shrestha","2050/09/22","a+ve","vanroshr@gmail.com","Teku",9849170867,"BCT");
	$repository->add($student2);

	$student3 = new Student();
	$student3->initialize(3,"Sujan","Bir Malakar","2051/09/14","b+ve","smsujanbir@gmail.com","Nayabazar",9843224697,"BCT");
	$repository->add($student3);

	include_once('includes/formvalidation.php');
	
?>


<?php include_once('includes/header.php');?>

		<tr>
			<th colspan="10" class="text-center">Student Info<button class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#add_student"><span class="glyphicon glyphicon-plus"></span></button></th>
		</tr>
		<tr>
			<th><input type="checkbox" id="select_all"/></th>
			<th>Id</th>
			<th>Full Name</th>
			<th>DOB</th>
			<th>Blood Group</th>
			<th>Email</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Program</th>
			<th>Action</th>
		</tr>

		<?php
			$student_list = $repository->get_all();
			foreach ($student_list as $student){
		?>
			<tr>
				<td><input type="checkbox" name="id" value="<?php echo $student->get_id();?>"></td>
				<td><?php echo $student->get_id();?></td>
				<td><?php echo $student->get_first_name();?> <?php echo $student->get_last_name();?></td>
				<td><?php echo $student->get_dob();?></td>
				<td><?php echo $student->get_blood_group();?></td>
				<td><?php echo $student->get_email();?></td>
				<td><?php echo $student->get_address();?></td>
				<td><?php echo $student->get_contact();?></td>
				<td><?php echo $student->get_program();?></td>
				<td><button class="btn btn-sm btn-success" role="button" id="edit_btn" value="<?php echo $student->get_id();?>" data-toggle="modal" data-target="#edit_student">Edit</button> <button class="btn btn-sm btn-danger" role="button">Delete</button></td>
			</tr>
		<?php
		}
		?>


	</table>
</div>

<!-- Add Student Modal -->
<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="number" class="form-control" id="id" name="id" placeholder="Id" required>
						</div>
					</div>
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
							<input type="text" class="form-control" id="dob" name="dob" placeholder="DOB - yyyy/mm/dd" required>
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
					   		<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
					 	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="number" class="form-control" id="contact" name="contact" placeholder="Contact Number" required>
					    </div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-12">
				      		<input type="text" class="form-control" id="program" name="program" placeholder="Program" required>
				    	</div>
				 	</div>
			  		
				 	<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" id="add" name="add" class="btn btn-primary" value="Add"/>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- Add Student Modal Close -->

<!-- Edit Student Modal -->
<div class="modal fade" id="edit_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      			    			
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="number" class="form-control" id="edit_id" name="edit_id" placeholder="Id" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="edit_first_name" name="edit_first_name" placeholder="First Name" value=""required>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="edit_last_name" name="edit_last_name" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="text" class="form-control" id="edit_dob" name="edit_dob" placeholder="DOB - yyyy/mm/dd" required>
						</div>
					</div>
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="text" class="form-control" id="edit_blood_group" name="edit_blood_group" placeholder="Blood Group" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="email" class="form-control" id="edit_email" name="edit_email" placeholder="Email" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
					   		<input type="text" class="form-control" id="edit_address" name="edit_address" placeholder="Address" required>
					 	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="number" class="form-control" id="edit_contact" name="edit_contact" placeholder="Contact Number" required>
					    </div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-12">
				      		<input type="text" class="form-control" id="edit_program" name="edit_program" placeholder="Program" required>
				    	</div>
				 	</div>
			  		
				 	<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" id="add" name="add" class="btn btn-primary" value="Save"/>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- Edit Student Modal Close -->
<?php include_once('includes/footer.php');?>