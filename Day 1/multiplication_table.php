<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
	<style type="text/css">
	table td{
			border:1px dotted white;
	}

	</style>
</head>
<body>

<?php
	for($i=1;$i<=10;$i++){
?>
<table style="border:3px solid white;color:white">
<?php
		for ($j=1;$j<=10;$j++) { 
?>
	<tr style="background-color:#<?php echo ($i-1).($i-1);for($k=1;$k<=4;$k++){echo $j-1;}?>;">
		<td><?=$i?></td>	
		<td>*</td>
		<td><?=$j?></td>
		<td>=</td>
		<td><?=($i*$j)?></td>
	</tr>
<?php		
		}//$j for loop end
?>
</table>
<?php
	}//$i for loop end
?>
</body>
</html>
