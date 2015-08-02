<!DOCTYPE html>
<html>
<head>
	<title>Advanced Percentage Calculator</title>
	<style type="text/css">
		.title{
			font-size: 25px;
			font-family: arial, ms reference sans serif, comic sans;
			font-weight: bold;
			font-variant: small-caps;
			background-color: #63dda2;
			padding-left: 10px;
		}

		form{
			width: 124px;
			color: #443444;
		}

		.form_attr{
			width:80px;
			float: left;
			clear: left;
		}

		form input[type="number"]{
			width: 40px;
		}

		form input[type="submit"]{
			background-color: #443444;
			color: white;
		}

	</style>
</head>
<body>
<?php
	$calc=false;
	if(isset($_POST['submit'])){
		$calc=true;
	}
	else{
		$calc=false;
	}
?>
<div class="title">SLC Advanced Percentage Calculator</div><br/>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="frm">
	<div class="form_attr">English : </div><input type="number" name="sub1" min=0 max=100 required/>
	<div class="form_attr">Nepali : </div><input type="number" name="sub2" min=0 max=100 required/>
	<div class="form_attr">C.Maths : </div><input type="number" name="sub3" min=0 max=100 required/>
	<div class="form_attr">A.Maths : </div><input type="number" name="sub4" min=0 max=100 required/>
	<div class="form_attr">Science : </div><input type="number" name="sub5" min=0 max=100 required/>
	<div class="form_attr">Soc. Std. : </div><input type="number" name="sub6" min=0 max=100 required/>
	<div class="form_attr">Computer : </div><input type="number" name="sub7" min=0 max=100 required/>
	<div class="form_attr">E.P.H. : </div><input type="number" name="sub8" min=0 max=100 required/>
	<input type="submit" name="submit" value="submit"/>
</form>

<?php
	if($calc){
		$percentage=0;
		$result=true;
		for($i=1;$i<=8;$i++){
		$var="sub". $i;
			if($_POST[$var]<40)
				$result=false;
				$percentage=$percentage+$_POST[$var];
			
		}
		if($result){
			$percentage=$percentage/8;
			echo "Your Percentage : ".$percentage."%";
		}
		else{
			echo "Fail";
		}
	}
?>
</body>
</html>