<?php
	
	require_once('models/subject.class.php');
	require_once('repository/subjectrepository.class.php');

	$repository = new SubjectRepository();

	$subject1 = new Subject();
	$subject1->initialize(1,"Simulation & Modeling",45,"Surendra Shakya","CT 501");
	$repository->add($subject1);

	$subject2 = new Subject();
	$subject2->initialize(2,"Internet & Intranet",40,"Sajan Thapa","CT 502");
	$repository->add($subject2);
	
	$subject3 = new Subject();
	$subject3->initialize(3,"Big Data Technology",45,"Rajiv Shah","CT503");
	$repository->add($subject3);

	include_once('includes/formvalidation.php');
	
?>

<?php include_once('includes/header.php');?>
		<tr>
			<th colspan="7" class="text-center">subject Info<button class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#add_subject"><span class="glyphicon glyphicon-plus"></span></button></th>
		</tr>
		<tr>
			<th><input type="checkbox" id="select_all"/></th>
			<th>Id</th>
			<th>Name</th>
			<th>Hours</th>
			<th>Teacher</th>
			<th>Code</th>
			<th>Action</th>
		</tr>

		<?php
			$subject_list = $repository->get_all();
			foreach ($subject_list as $subject){
		?>
			<tr>
				<td><input type="checkbox" name="id" value="<?php echo $subject->get_id();?>"></td>
				<td><?php echo $subject->get_id();?></td>
				<td><?php echo $subject->get_name();?> <?php echo $subject->get_name();?></td>
				<td><?php echo $subject->get_hours();?></td>
				<td><?php echo $subject->get_teacher();?></td>
				<td><?php echo $subject->get_code();?></td>
				<td><button class="btn btn-sm btn-success" role="button" id="edit_btn" value="<?php echo $subject->get_id();?>" data-toggle="modal" data-target="#edit_subject">Edit</button> <button class="btn btn-sm btn-danger" role="button">Delete</button></td>
			</tr>
		<?php
		}
		?>


	</table>
</div>

<!-- Add subject Modal -->
<div class="modal fade" id="add_subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="number" class="form-control" id="id" name="id" placeholder="Id" required>
						</div>
					</div>
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="text" class="form-control" id="name" name="name"placeholder="Name" required>
						</div>
					</div>
					   
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="number" class="form-control" id="hours" name="hours" placeholder="Hours" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
					   		<input type="text" class="form-control" id="teacher" name="teacher" placeholder="Teacher" required>
					 	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="text" class="form-control" id="code" name="code" placeholder="Code" required>
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
<!-- Add subject Modal Close -->

<!-- Edit subject Modal -->
<div class="modal fade" id="edit_subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      			    			
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" method="post">
						<div class="form-group">
			    		<div class="col-sm-12">
							<input type="number" class="form-control" id="edit_id" name="edit_id" placeholder="Id" required>
						</div>
					</div>
					<div class="form-group">
			    		<div class="col-sm-12">
							<input type="text" class="form-control" id="edit_name" name="edit_name"placeholder="Name" required>
						</div>
					</div>
					   
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="number" class="form-control" id="edit_hours" name="edit_hours" placeholder="Hours" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
					   		<input type="text" class="form-control" id="edit_teacher" name="edit_teacher" placeholder="Teacher" required>
					 	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="text" class="form-control" id="edit_code" name="edit_code" placeholder="Code" required>
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
<!-- Edit subject Modal Close -->
<?php include_once('includes/footer.php');?>