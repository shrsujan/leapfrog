<!DOCTYPE html>
<html>
<head>
	<title>Array Search</title>
</head>
<body>
<?php
	$array=array("id"=>"202","name"=>"Sujan","course"=>"Php","academy"=>"Leapfrog");
	$array2=array(10,20,30,50,80);
?>
<?php
	$result=false;
	
	if(isset($_POST['submit'])){
		foreach ($array2 as $b) {
		if ($_POST['naam']==$b) {
			$result=true;
		}
	}
		if($_POST['naam']==$array['name'])
		{
			$username=$_POST['naam'];
			$msg="Found in array";
		}
		elseif ($result) {
			$username=$_POST['naam'];
			$msg="Found in array2";
		}
		else{
			$username="";
			$msg="Not Found";
		}
	}
	else{
		$username="";
		$msg="";
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="frm" method="post">
	<input type="text" name="naam" placeholder="name" value="<?php echo $username;?>" required/><br/>
	<input type="submit" name="submit" value="submit"/>
</form>

<?php
	echo $msg;
	if ($msg=="Found in array") {
		foreach ($array as $key => $value) {
				echo "<br/>".$key.": ".$value;
			}
	}
	elseif ($msg=="Found in array2") {
		foreach ($array2 as $b) {
				echo "<br/>".$b;
			}	
	}
?>


</body>
</html>