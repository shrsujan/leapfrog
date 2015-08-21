<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Add Facilitator</h3>
	</div>
<?php echo form_open(site_url('admin/Facilitators/add'));?>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="first_name">First Name</label>
				<input class="form-control" type="text" name="first_name" placeholder="First Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="last_name">Last Name</label>
				<input class="form-control" type="text" name="last_name" placeholder="Last Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="email">Email</label>
				<input class="form-control" type="email" name="email" placeholder="Email" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="contact_no">Contact No</label>
				<input class="form-control" type="text" name="contact_no" placeholder="Contact No" required/><br/>
				
			</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="contact_no">Course</label>
				<input class="form-control" type="text" name="course" placeholder="Course" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="status">Status</label>
				<select name="status">
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-7">
				<button class="btn btn-md btn-success" type="submit" name="submit_btn">Submit</button>
			</div>
		</div>
<?php echo form_close();?>
</div><!--box-->