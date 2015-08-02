<?php include_once('includes/header.php');?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="students.php">Students</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="facilitators.php">Facilitators</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="sessions.php">Sessions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="courses.php">Courses</a></li>
          </ul>
        </li>
      </ul>
<?php include_once('includes/modal.php');?>
<center><img src="images/cover2.png" width="100%" />
<h2 style="color:#B8E65C;">Leapfrog Academy</h2>
</center>
<?php include_once('includes/footer.php');?>
