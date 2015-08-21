<?php
	if(isset($_GET['insert']) && $_GET['insert']=="true"){
?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Success!</strong> New record added.
		</div>
<?php
	}
?>
<?php
	if(isset($_GET['insert']) && $_GET['insert']=="false"){
?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
      		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		<strong>Oh Snap!</strong> Failure in adding record.
		</div>
<?php
}
?>
<?php
	if(isset($_GET['update']) && $_GET['update']=="true"){
?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Success!</strong> Record updated.
		</div>
<?php
	}
	if(isset($_GET['update']) && $_GET['update']=="false"){
?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
      		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		<strong>Oh Snap!</strong> Failure in updating record.
		</div>
<?php
}
?>
<table class="table table-bordered table-stiped table-hover">
	<tr>
		<th style="text-align:center" colspan="8"><h3>Product List<a href="index.php?page=aproduct&m=add" class="btn btn-xs btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span></a></h3></th>
	</tr>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
		<th>Sell Price</th>
		<th>Cost Price</th>
		<th>Photo</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
<?php
	$product_repo = new ProductRepository();

	foreach($product_repo->get_all() as $product){
?>
	<tr class="<?php echo ($product->get_status())?"":"danger";?>">
		<td><?php echo $product->get_id();?></td>
		<td><?php echo $product->get_name();?></td>
		<td><?php echo $product->get_description();?></td>
		<td><?php echo $product->get_sell_price();?></td>
		<td><?php echo $product->get_cost_price();?></td>
		<td><?php echo $product->get_photo();?></td>
		<td><?php echo $product->get_status();?></td>
		<td><a href="index.php?page=aproduct&m=edit&id=<?php echo $product->get_id();?>" class="btn btn-sm btn-success">Edit</a> <a href="index.php?page=aproduct&m=delete&id=<?php echo $product->get_id();?>" class="btn btn-sm btn-danger" onclick="return confirm(Are You Sure?)">Delete</a></td>
	</tr>
<?php
	}
?>
</table>