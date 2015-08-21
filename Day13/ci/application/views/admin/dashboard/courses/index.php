<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Courses Table</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		</div>

	</div>

	<div class="box-body">

		<div class="box-body table-responsive no-padding">
			<a href="<?php echo site_url('admin/courses/add');?>" role="button" class="btn btn-xs btn-primary pull-right">Add</a>
			
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Duration</th>
				<th>Duration Type</th>
				<th>Logo</th>
				<th>Amount</th>
				<th>Taxable</th>
				<th>Action</th>
			</tr>
			<?php
				foreach ($courses->result() as $c) {
			?>
				<tr>
					<td><?php echo $c->id;?></td>
					<td><?php echo $c->name;?></td>
					<td><?php echo $c->duration;?></td>
					<td><?php echo $c->duration_type;?></td>
					<td><?php echo $c->logo;?></td>
					<td><?php echo $c->amount;?></td>
					<td><?php echo $c->is_taxable;?></td>
					<td><a href="#"><button class="btn btn-sm btn-success">Edit</button></a> <a href="#"><button class="btn btn-sm btn-danger">Delete</button></a></td>
				</tr>
			<?php		
				}
			?>
		</table>
		</div>
	
		<div class="box-footer clearfix">
			<?php echo $this->pagination->create_links();?>
	
		</div>
	</div>
</div>
