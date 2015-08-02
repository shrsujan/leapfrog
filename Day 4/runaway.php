<!DOCTYPE html>
<html>
<head>
	<title>Runaway</title>
	<script src="assets/js/jquery.min.js"></script>
	<style type="text/css">
		#run {
			position: absolute;
			top:200px;
			left:200px;
			width: auto;
			height: auto;
		}
	</style>
</head>
<body>
<div id="run">Move on Arrowkey press</div>
<script type="text/javascript">
	$(document).on("ready",function(){
		$("#run").on("keydown",function(e){
			var rand = Math.floor((Math.random() * 10) + 10);
			if(e.keyCode=='37')
				$(this).css("left","-=100px");
			else if(e.keyCode=='38')
				$(this).css("top","-=100px");
			else if(e.keyCode=='39')
				$(this).css("left","+=100px");
			else if(e.keyCode=='40')
				$(this).css("top","+=100px");
		});
	});
</script>
</body>
</html>