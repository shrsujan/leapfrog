<?php include_once('includes/header.php');?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="students.php">Students</a></li>
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
<table title="Students' Info" class="table table-bordered table-striped table-hover">
  <tr>
    <th colspan="8" style="font-size:25px;text-align:center;">Students' Info<a href="#" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span></th>
  </tr>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Course</th>
    <th>Facilitator</th>
    <th>Session</th>
    <th>Schedule</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr class="success">
    <td>1</td>
    <td>Sujan Bir Malakar</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>2</td>
    <td>Sujan Shrestha</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>3</td>
    <td>Pratish B. Shrestha</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="danger">
    <td>4</td>
    <td>Romit Amgai</td>
    <td>Java</td>
    <td>Sajan Thapa</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Inactive</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>5</td>
    <td>Nitu Yadav</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>6</td>
    <td>Sushil Kharel</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>8-10</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>7</td>
    <td>Shrijan Shrestha</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="success">
    <td>8</td>
    <td>Mohan Singh</td>
    <td>Php</td>
    <td>Dixant B. Shrestha</td>
    <td>2 Months</td>
    <td>2-4</td>
    <td>Active</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
  <tr class="danger">
    <td>9</td>
    <td>Rajiv Shah</td>
    <td>ASP .net</td>
    <td>Sajan Thapa</td>
    <td>2 Months</td>
    <td>11-1</td>
    <td>Inactive</td>
    <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" ></span></button> <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?');"><span class="glyphicon glyphicon-trash"></span></button></td>
  </tr>
</table>

<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      
      <form class="form-horizontal">
       <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Id</label>
          <div class="col-sm-10">
          <input type="number" class="form-control" id="add_id" placeholder="example 101" required>
        </div>
       </div>
       <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="add_name" placeholder="example Jane Doe" required>
        </div>
       </div>   
       <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Course</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="add_course" placeholder="example Php" required>
        </div>
       </div>
       <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Facilitator</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="add_facilitator" placeholder="example John Nash" required>
        </div>
       </div>   
        <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Session</label>
          <div class="col-sm-10">
          <select class="form-control" id="add_session">
            <option>2 Months</option>
            <option>4 Months</option>
            <option>6 Months</option>
            <option>1 Year</option>
          </select>
        </div>
       </div>
        <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Schedule</label>
          <div class="col-sm-10">
          <select class="form-control" id="add_schedule">
            <option>8-10</option>
            <option>11-1</option>
            <option>2-4</option>
          </select>
        </div>
       </div>
       <div class="form-group">
          <label for="exampleInputName2" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
          <select class="form-control" id="add_status">
            <option>Active</option>
            <option>Inactive</option>
            </select>
        </div>
       </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" id="add" class="btn btn-primary" value="Add"/>
      </div>
    </form>
</div>
</div>
</div>
<!-- add Modal Close -->
<?php include_once('includes/footer.php');?>
