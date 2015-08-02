<!DOCTYPE html>
<html>
<head>
	<title>Array names printing and colors</title>
</head>
<body>
<?php
	$colors=array("red","orange","yellow","green","blue","indigo","violet");
?>

<?php
	if(isset($_POST['submit'])){
		$result="";
		foreach ($colors as $value) {
			if (strtolower($_POST['color'])==$value) {
				$result=$value;
			}
		}
	}
	else{
		$result="";
	}
?>

<ul type="none">
<?php
	foreach ($colors as $value) {
?>
	<li style="margin-left:-40px;padding-left:10px;background-color:<?=$value?>;"><?php echo strtoupper($value);if($result==$value){echo " found";}?></li>
<?php
}
?>
</ul>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="frm">
	<input type="text" name="color" placeholder="color" width="25px"/><br/>
	<input type="submit" value="submit" name="submit"/>
</form>
</ul>
</body>
</html>