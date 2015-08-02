<!DOCTYPE html>
<html lang="en">
<head>
	<title>ACEM</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap-theme.min.css" />
	<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-inverse" style="border-radius:0">
	 	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
	      		<a class="navbar-brand" href="index.php">ACEM</a>
	    	</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
	        		<li><a href="student.php">Student <span class="sr-only">(current)</span></a></li>
	        		<li><a href="teacher.php">Teacher</a></li>
			    	<li><a href="subject.php">Subject</a></li>
	        		<li><a href="department.php">Department</a></li>      
	        		<li><a href="program.php">Program</a></li>      
	        	</ul>
	            <div class="pull-right"><a href="#" class="btn btn-sm btn-primary" role="button">Sign Up</a> <a href="#" class="btn btn-sm btn-success" role="button">Log In</a>
	      		</div>
	    	</div><!-- /.navbar-collapse -->
	 	</div><!-- /.container-fluid -->
	</nav>