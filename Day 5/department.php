<?php
	
	require_once('models/department.class.php');
	require_once('repository/departmentrepository.class.php');

	$repository = new DepartmentRepository();

	$department1 = new Department();
	$department1->initialize(1,"BCT","Dhaneshwor","Vjit",20,3);
	$repository->add($department1);

	$department2 = new Department();
	$department2->initialize(2,"BEX","Sajan Thapa","Romit Amgai",25,2);
	$repository->add($department2);

	$department3 = new Department();
	$department3->initialize(3,"BEL","Rajiv Shah","Ritesh",18,1);
	$repository->add($department3);

	$department4 = new Department();
	$department4->initialize(4,"BCE","Promish","Sagun",22,0);
	$repository->add($department4);

	include_once('includes/formvalidation.php');
	
?>
<?php include_once('includes/header.php');?>
		<tr>
			<th colspan="8" class="text-center">department Info<button class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#add_department"><span class="glyphicon glyphicon-plus"></span></button></th>
		</tr>
		<tr>
			<th><input type="checkbox" id="select_all"/></th>
			<th>Id</th>
			<th>Name</th>
			<th>Hod</th>
			<th>Vhod</th>
			<th>Teacher</th>
			<th>Floor</th>
			<th>Action</th>
		</tr>

		<?php
			$department_list = $repository->get_all();
			foreach ($department_list as $department){
		?>
			<tr>
				<td><input type="checkbox" name="id" value="<?php echo $department->get_id();?>"></td>
				<td><?php echo $department->get_id();?></td>
				<td><?php echo $department->get_name();?></td>
				<td><?php echo $department->get_hod();?></td>
				<td><?php echo $department->get_vhod();?></td>
				<td><?php echo $department->get_teacher();?></td>
				<td><?php echo $department->get_floor();?></td>
				<td><button class="btn btn-sm btn-success" role="button" id="edit_btn" value="<?php echo $department->get_id();?>" data-toggle="modal" data-target="#edit_department">Edit</button> <button class="btn btn-sm btn-danger" role="button">Delete</button></td>
			</tr>
		<?php
		}
		?>


	</table>
</div>

<!-- Add department Modal -->
<div class="modal fade" id="add_department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						    <input type="text" class="form-control" id="hod" name="hod" placeholder="Hod" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="text" class="form-control" id="vhod" name="vhod" placeholder="Vhod" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="number" class="form-control" id="teacher" name="teacher" placeholder="Teacher" required>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="number" class="form-control" id="floor" name="floor" placeholder="Floor" required>
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
<!-- Add department Modal Close -->

<!-- Edit department Modal -->
<div class="modal fade" id="edit_department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						    <input type="text" class="form-control" id="edit_hod" name="edit_hod" placeholder="Hod" required>
						</div>
					</div>   
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="text" class="form-control" id="edit_vhod" name="edit_vhod" placeholder="Vhod" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
					    	<input type="number" class="form-control" id="edit_teacher" name="edit_teacher" placeholder="Teacher" required>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						    <input type="number" class="form-control" id="edit_floor" name="edit_floor" placeholder="Floor" required>
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
<!-- Edit department Modal Close -->
<?php include_once('includes/footer.php');?>