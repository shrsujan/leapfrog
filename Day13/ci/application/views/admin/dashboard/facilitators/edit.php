<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Facilitator</h3>
	</div>
<?php $flt = $facilitators->first_row();?>
<?php echo form_open(site_url('admin/Facilitators/edit/'.$flt->id));?>
		<div class="form-group">	
			<div class="col-md-7">
				<label for="first_name">First Name</label>
				<input value="<?php echo $flt->first_name;?>" class="form-control" type="text" name="first_name" placeholder="First Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="last_name">Last Name</label>
				<input value="<?php echo $flt->last_name;?>" class="form-control" type="text" name="last_name" placeholder="Last Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="email">Email</label>
				<input value="<?php echo $flt->email;?>" class="form-control" type="email" name="email" placeholder="Email" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="contact_no">Contact No</label>
				<input value="<?php echo $flt->contact_no;?>" class="form-control" type="text" name="contact_no" placeholder="Contact No" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="contact_no">Course</label>
				<input value="<?php echo $flt->course;?>" class="form-control" type="text" name="course" placeholder="Course" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="status">Status</label>
				<select name="status">
					<option value="1" <?php echo ($flt->status)?'selected':'';?>>Active</option>
					<option value="0" <?php echo ($flt->status)?'':'selected';?>>Inactive</option>
				</select>		
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-7">
				<input type="hidden" name="id" value="<?php echo $flt->id?>"/>
				<button class="btn btn-md btn-success" type="submit" name="submit_btn">Submit</button>
			</div>
		</div>
<?php echo form_close();?>
</div><!--box-->