<!DOCTYPE html>
<html>
<head>
	<title>Array Multiplication and Addition using Foreach</title>
	<style type="text/css">
		.heading{
			font-family: arial, ms reference sans serif, times new roman;
			font-size: 20px;
			font-weight: bold;
			font-variant: small-caps;
			width: 100%;
			background-color:#34aaff;
		}

	</style>
</head>
<body>

<?php
	$array=array(10,20,30,50,80);
?>
<div class="heading">Array Multiplication</div><br/>
<?php
	$result=1;
	$num=0;
	foreach($array as $i){
		echo $i;
		if($num<count($array)-1)
			echo "*";
		$result*=$i;
		$num++;
	}
	echo "=".$result;
?>
<br/><br/>
<div class="heading">Array Addition</div><br/>
<?php
	$result=0;
	$num=0;
	foreach($array as $i){
		echo $i;
		if($num<count($array)-1)
			echo "*";
		$result+=$i;
		$num++;
	}
	echo "=".$result;
?>

</body>
</html>