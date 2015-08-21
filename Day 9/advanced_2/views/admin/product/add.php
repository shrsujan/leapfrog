<h3>Add Product</h3>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Sell Price">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="Cost Price">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="photo" name="photo" placeholder="Photo">
  </div>
    <input type="radio" class="" name="status" value="1">Yes
    <input type="radio" class="" name="status" value="0">No<br/>
  <button type="submit" name="add" class="btn btn-default">Add</button>
</form>