<?php include_once('includes/header.php');?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="students.php">Students</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="facilitators.php">Facilitators</a></li>
            <li role="separator" class="divider"></li>
            <li class="active"><a href="sessions.php">Sessions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="courses.php">Courses</a></li>
          </ul>
        </li>
      </ul>
<?php include_once('includes/modal.php');?>
<table title="Students' Info" class="table table-bordered table-striped table-hover">
  <tr>
    <th colspan="8" style="font-size:25px;text-align:center;">Session Info</th>
  </tr>
  <tr>
    <th>#</th>
    <th>Course</th>
    <th>Facilitator</th>
    <th>Start Date</th>
    <th>Duration</th>
    <th>Schedule</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr class="success">
    <td>1</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>07/12/2015</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Ongoing</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="warning">
    <td>2</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>07/15/2015</td>
    <td>2 Months</td>
    <td>11-1</td>
    <td>Not Started</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr> 
  <tr class="danger">
    <td>3</td>
    <td>Java</td>
    <td>Sajan Thapa</td>
    <td>02/10/2015</td>
    <td>2 Months</td>
    <td>8-10</td>
    <td>Finished</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>4</td>
    <td>Java</td>
    <td>Dixant B. Shrestha</td>
    <td>07/12/2015</td>
    <td>2 Months</td>
    <td>11-1</td>
    <td>Ongoing</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>5</td>
    <td>ASP .net</td>
    <td>Sajan Thapa</td>
    <td>02/12/2015</td>
    <td>2 Months</td>
    <td>8-10</td>
    <td>Ongoing</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
</table>

<?php include_once('includes/footer.php');?>
