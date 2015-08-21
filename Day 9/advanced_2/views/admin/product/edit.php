<?php
$product_repo = new ProductRepository();
$e = $product_repo->get_by_id($_GET['id']);
if(is_null($e)){
  header('location:index.php?page=aproduct');
}
?>
<h3>Edit Product</h3>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $e->get_name();?>">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $e->get_description();?>">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Sell Price" value="<?php echo $e->get_sell_price();?>">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="Cost Price" value="<?php echo $e->get_cost_price();?>">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="photo" name="photo" placeholder="Photo" value="<?php echo $e->get_photo();?>">
  </div>
    <input type="radio" class="" name="status" value="1" <?php echo ($e->get_status())?'checked':'';?>>Yes
    <input type="radio" class="" name="status" value="0" <?php echo ($e->get_status())?'':'checked';?>>No<br/>
    <input type="hidden" name="id" value="<?php echo $e->get_id();?>">
  <button type="submit" name="edit" class="btn btn-default">Update</button>
</form>