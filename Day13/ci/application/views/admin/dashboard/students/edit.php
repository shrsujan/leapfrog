<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Students</h3>
	</div>
<?php $std = $students->first_row();?>
<?php echo form_open(site_url('admin/Students/edit/'.$std->id));?>
		<div class="form-group">	
			<div class="col-md-7">
				<label for="first_name">First Name</label>
				<input value="<?php echo $std->first_name;?>" class="form-control" type="text" name="first_name" placeholder="First Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="last_name">Last Name</label>
				<input value="<?php echo $std->last_name;?>" class="form-control" type="text" name="last_name" placeholder="Last Name" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="email">Email</label>
				<input value="<?php echo $std->email;?>" class="form-control" type="email" name="email" placeholder="Email" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="contact_no">Contact No</label>
				<input value="<?php echo $std->contact_no;?>" class="form-control" type="text" name="contact_no" placeholder="Contact No" required/><br/>
				
			</div>
		</div>
		<div class="form-group">	
			<div class="col-md-7">
			<label for="status">Status</label>
				<select name="status">
					<option value="1" <?php echo ($std->status)?'selected':'';?>>Active</option>
					<option value="0" <?php echo ($std->status)?'':'selected';?>>Inactive</option>
				</select>		
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-7">
				<input type="hidden" name="id" value="<?php echo $std->id?>"/>
				<button class="btn btn-md btn-success" type="submit" name="submit_btn">Submit</button>
			</div>
		</div>
<?php echo form_close();?>
</div><!--box-->