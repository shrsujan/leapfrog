<?php require_once('config/config.php');?>
<?php include_once(ROOT_PATH.'models/user.class.php');?>
<?php include_once(ROOT_PATH.'repository/userrepository.class.php');?>
<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
	$user_repository = new UserRepository();

	$user = $user_repository->get_user($_POST['email'],$_POST['password']);
	if(is_null($user)){
		header('location:login.php?invalid=true');
	}
	else{
		session_start();
		$_SESSION['email'] = $user->get_email();
		$_SESSION['password'] = $user->get_password();
		$_SESSION['logged_in'] = 1;
		header('location:index.php');
	}
}
else{
	header('location:login.php');
}
?>