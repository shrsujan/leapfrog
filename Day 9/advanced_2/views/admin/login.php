<?php require_once('../../config/config.php');?>
<?php include_once(ROOT_PATH.'models/user.class.php');?>
<?php include_once(ROOT_PATH.'repository/userrepository.class.php');?>
<html>
<div style="width:30%;height:auto;margin:0 auto;">
<form method="post" action="<?php echo BASE_URL?>views/admin/check.php">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Log In</button>
</form>
</div>
</html>