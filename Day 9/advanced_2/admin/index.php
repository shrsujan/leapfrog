<?php require_once('../config/config.php');?>
<?php include_once('header.php');?>

<?php
		$page = isset($_GET['page'])?$_GET['page']:'';
		if(array_key_exists($page, $routes)){
			include_once(ROOT_PATH.'assets/includes/navbar.php');
			include_once(ROOT_PATH.'controller/'.$routes[$page].'.php');

		}
		elseif(empty($_GET)){
			include_once(ROOT_PATH.'assets/includes/navbar.php');
		?>
		<div class="jumbotron">
			<h1>Welcome!!</h1>
		</div>
		<?php
		}
		else{
			echo "<h3>Page Not Found!!</h3>";
		}

?>
<?php include_once('footer.php');?>