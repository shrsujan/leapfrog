<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Students Table</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		</div>

	</div>

	<div class="box-body">

		<div class="box-body table-responsive no-padding">
			<a href="<?php echo site_url('admin/students/add');?>" role="button" class="btn btn-xs btn-primary pull-right">Add</a>
			
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Contact No</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php
				foreach ($students->result() as $std) {
			?>
			<tr>
				<td><?php echo $std->id;?></td>
				<td><?php echo $std->first_name;?> <?php echo $std->last_name;?></td>
				<td><?php echo $std->email;?></td>
				<td><?php echo $std->contact_no;?></td>
				<td>
					<?php echo form_open(site_url('admin/students/updateStatus/'.$std->id.'/'.$std->status));
						if($std->status){
							echo '<button type="submit" name="status_btn" class="label label-success btn">Active</button>';
						}
						else{
							echo '<button type="submit" name="status_btn" class="label label-danger btn">Inactive</button>';
						}
						echo form_close();
					?>
				</td>
				<td><a href="<?php echo site_url('admin/students/edit/'.$std->id);?>" role="button" class="bnt btn-sm btn-success">Edit</a></div> <a href="<?php echo site_url('admin/students/delete/'.$std->id);?>" role="button" class="bnt btn-sm btn-danger" onclick="return confirm('Are You Sure?');">Delete</a></td>
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