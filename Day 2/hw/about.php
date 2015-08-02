<?php include_once('includes/header.php');?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="about.php">About</a></li>
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
<h2>About</h2>
<p>Information about Leapfrog Academy.
</p>
<?php include_once('includes/footer.php');?>
