<!DOCTYPE html>
<html>
<head>
	<title>JavaScript/jQuery/AJAX/Bootstrap</title>
	<script src="assets/js/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-family:Ananda Namaste;font-size:25px;">apps</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#" data-toggle="modal" data-target="#calc">Calculator <span class="sr-only">(current)</span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#stopwatch">Stopwatch</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<!-- calculator modal -->
<div id="cmodal" class="modal fade" id="calc" tabindex="-1" role="dialog" aria-labelledby="calculatorModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin:5px;"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- calculator modal close -->

<!-- stopwatch modal -->
<div class="modal fade" id="stopwatch" tabindex="-1" role="dialog" aria-labelledby="stopwatchModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- stopwatch modal close -->
<div id="text1" style="color:red;position:absolute;">
	hello
</div>
<br/>
<button id="toggle_btn">Show/Hide</button>
<script>
$(document).ready(function(){
	$("#text1").on("click",function(){
		$(this).css("color","green").animate({
			left:'250px'
		},5000);
	});
	var toggle=true;
	$("#toggle_btn").on("click",function(){
		if(toggle){
			$("div.container").slideUp();
			toggle=false;
		}
		else{
			$("div.container").slideDown();
			toggle=true;
		}
	});
});
</script>
</body>
</html>