<?php require_once('config/config.php');?>
<?php
	if(isset($_POST['logout'])){
		session_destroy();
		header('location:login.php?logout=true');
	}
	else{
		header('location:index.php');
	}
?>