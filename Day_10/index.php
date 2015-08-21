<?php require_once('config/config.php');?>
<?php
	if(!isset($_SESSION['logged_in'])){
		header('location:login.php');
	}
?>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
<p>Logged in as <?php echo $_SESSION['email'];?></p>
<form action="logout.php" method="post">
	<button type="submit" name="logout">Log Out</button>
</form>
</body>
</html>