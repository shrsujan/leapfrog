<!DOCTYPE html>
<html lang="en">
<head>
	<title>Javascript Implementation</title>
<style type="text/css">
	#box{
		width: 200px;
		height: 150px;
		border: 1px;
		box-shadow: 0 0 0 2px;
		display: block;
	}
	
	#box_para{
		font-family: georgia;
		font-size: 20px;
		font-style: italic;
	}	
</style>
<!-- <script src="js/functions.js"></script> -->

</head>
<body>
<button id="btn">Click Me</button>
<div id="box">
	<p id="box_para">This box will disappear and re-appear on the click of the button.</p>
</div>
<script src="js/functions.js"></script>
<script>
	var btn=objCreate("btn"),box=objCreate("box"), st=true;
	btn.onclick=function(){
		if(st){
			showHide(box,st);
			st=false;
		}
		else{
			showHide(box,st);
			st=true;
		}
	};
</script>
</body>

</html>