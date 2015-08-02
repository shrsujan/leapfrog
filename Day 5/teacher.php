<?php
	
	require_once('models/teacher.class.php');
	require_once('repository/teacherrepository.class.php');

	$repository = new TeacherRepository();

	$teacher1 = new Teacher();
	$teacher1->initialize(1,"Surendra","Shakya","surendrashakya@gmail.com","Pulchowk",23423432);
	$repository->add($teacher1);

	$teacher2 = new Teacher();
	$teacher2->initialize(2,"Sajan","Thapa","thapasajan@gmail.com","Bhaktapur",3242342);
	$repository->add($teacher2);

	$teacher3 = new Teacher();
	$teacher3->initialize(3,"Rajiv","Shah","rajivshah@gmail.com","Satdobato",32432423);
	$repository->add($teacher3);

	include_once('includes/formvalidation.php');
	
?>

<?php include_once('includes/header.php');?>
		<tr>
			<th colspan="7" class="text-center">Teacher Info<button class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#add_teacher"><span class="glyphicon glyphicon-plus"></span></button></th>
		</tr>
		<tr>
			<th><input type="checkbox" id="select_all"/></th>
			<th>Id</th>
			<th>Full Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Action</th>
		</tr>

		<?php
			$teacher_list = $repository->get_all();
			foreach ($teacher_list as $teacher){
		?>
			<tr>
				<td><input type="checkbox" name="id" value="<?php echo $teacher->get_id();?>"></td>
				<td><?php echo $teacher->get_id();?></td>
				<td><?php echo $teacher->get_first_name();?> <?php echo $teacher->get_last_name();?></td>
				<td><?php echo $teacher->get_email();?></td>
				<td><?php echo $teacher->get_address();?></td>
				<td><?php echo $teacher->get_contact();?></td>
				<td><button class="btn btn-sm btn-success" role="button" id="edit_btn" value="<?php echo $teacher->get_id();?>" data-toggle="modal" data-target="#edit_teacher">Edit</button> <button class="btn btn-sm btn-danger" role="button">Delete</button></td>
			</tr>
		<?php
		}
		?>


	</table>
</div>

<!-- Add teacher Modal -->
<div class="modal fade" id="add_teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					
				 	<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" id="add" name="add" class="btn btn-primary" value="Add"/>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- Add teacher Modal Close -->

<!-- Edit teacher Modal -->
<div class="modal fade" id="edit_teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					
				 	<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" id="add" name="add" class="btn btn-primary" value="Save"/>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- Edit teacher Modal Close -->
<?php include_once('includes/footer.php');?>