<!DOCTYPE html>
<html>
<head>
	<title>Patterns</title>
	<style type="text/css">
		.box{
			width: 50px;
			height: 100px;
			float: left;
			clear: right;
		}

	</style>
</head>
<body>

<div class="box">
<?php
	for($i=1;$i<=5;$i++){
		for ($j=1;$j<=$i;$j++) { 
				echo $j;
			}
		echo "<br/>";		
	}
?>
</div>

<div class="box">
<?php
	for($i=5;$i>=1;$i--){
		for ($j=5;$j>=$i;$j--) { 
				echo $j;
			}
		echo "<br/>";		
	}
?>
</div>

<div class="box">
<?php
	for($i=1;$i<=5;$i++){
?>
<div style="text-align:right;">
<?php
		for($k=1;$k<=$i;$k++){
			echo $i;
		}
?>
</div>
<?php
	}
?>
</div>

<div class="box">
<?php
	for($i=1;$i<=5;$i++){
?>
<div style="text-align:right;">
<?php
		for($k=1;$k<=$i;$k++){
			echo $k;
		}
?>
</div>
<?php
	}
?>
</div>


<div class="box">
<?php
	for($i=1;$i<=5;$i++){
?>
<div style="text-align:center;">
<?php
		for($k=1;$k<=$i;$k++){
			echo $i;
		}
?>
</div>
<?php
	}
?>
</div>

</body>
</html>