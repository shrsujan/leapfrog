<?php require_once('config/config.php');?>
<?php
	if(isset($_SESSION['logged_in'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap-theme.min.css" />
	<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<?php
	if(isset($_GET['invalid']) && $_GET['invalid']=="true"){
		echo "<h4>Invalid Username or Password</h4>";
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true"){
		echo "<h4>Logout Successful</h4>";
	}
?>
	<form method="post" action="check.php">
	<h1>Login</h1>
	<br/>
	  <div class="form-group">
	    
	    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
	  </div>
	  <div class="form-group">
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
</body>
</html>
