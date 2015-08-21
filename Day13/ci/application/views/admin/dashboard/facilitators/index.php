<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Facilitators Table</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		</div>

	</div>

	<div class="box-body">

		<div class="box-body table-responsive no-padding">
			<button role="button" class="btn btn-xs btn-primary pull-right" id="add_btn">Add</button>
			
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Contact No</th>
				<th>Course</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php
				foreach ($facilitators->result() as $flt) {
			?>
			<tr>
				<td><?php echo $flt->id;?></td>
				<td><?php echo $flt->first_name;?> <?php echo $flt->last_name;?></td>
				<td><?php echo $flt->email;?></td>
				<td><?php echo $flt->contact_no;?></td>
				<td><?php echo $flt->course;?></td>
				<td>
					<?php echo form_open(site_url('admin/facilitators/updateStatus/'.$flt->id.'/'.$flt->status));
						if($flt->status){
							echo '<button type="submit" name="status_btn" class="label label-success btn">Active</button>';
						}
						else{
							echo '<button type="submit" name="status_btn" class="label label-danger btn">Inactive</button>';
						}
						echo form_close();
					?>
				</td>
				<td><a href="<?php echo site_url('admin/facilitators/edit/'.$flt->id);?>" role="button" class="bnt btn-sm btn-success">Edit</a></div> <a href="<?php echo site_url('admin/facilitators/delete/'.$flt->id);?>" role="button" class="bnt btn-sm btn-danger" onclick="return confirm('Are You Sure?');">Delete</a></td>
			</tr>
			<?php    	
				} //end foreach
			?>
		</table>
	</div><!-- /.box-body -->

	<div class="box-footer clearfix">
		<?php echo $this->pagination->create_links();?>
	</div>
	</div><!-- /.box-body -->
</div><!-- /.box -->

<!-- modal start here -->

<!-- Signup Modal -->
<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      
			<?php echo form_open(site_url('admin/Facilitators/add'));?>
	
	<div class="form-group">	
			<div>
				<input class="form-control" type="text" name="first_name" placeholder="First Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div>
				<input class="form-control" type="text" name="last_name" placeholder="Last Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div>
				<input class="form-control" type="email" name="email" placeholder="Email" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div>
				<input class="form-control" type="text" name="contact_no" placeholder="Contact No" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div>
				<input class="form-control" type="text" name="course" placeholder="Course" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div>
				<select name="status">
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div>
				<button class="btn btn-md btn-success" type="submit" name="submit_btn">Submit</button>
			</div>
		</div>
    <?php echo form_close();?>
    </div>
  </div>
</div>
<!-- Signup Modal Close -->

<script>
$(document).ready(function(){
	$("#add_btn").on("click",function(){
		$("#add_modal").modal();
		return false;
	});
});
</script>