    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><button type="button" role="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#signup">Sign up</button></a></li>
        <li><a href="#"><button type="button" role="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#signin">Sign in</button></a></li>
   	</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Signup Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      
			<form class="form-horizontal">
			 <div class="form-group">
			    <label for="exampleInputName2" class="col-sm-2 control-label">Name</label>
    			<div class="col-sm-10">
					<input type="text" class="form-control" id="signup_name" placeholder="example Jane Doe" required>
				</div>
			 </div>   
			 <div class="form-group">
			    <label for="exampleInputName2" class="col-sm-2 control-label">Username</label>
    			<div class="col-sm-10">
					<input type="text" class="form-control" id="signup_username" placeholder="example jane_doe" required>
				</div>
			 </div>   
			  <div class="form-group">
			  	<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="signup_email" placeholder="example janedoe@example.com" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="signup_password" placeholder="Password" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="radio">
			        <label>
			          <input type="radio" id="signup_gender" name="signup_gender" value="male"> Male
			        </label>
			        <label>
			          <input type="radio" id="signup_gender" name="signup_gender" value="female"> Female
			        </label>
			      </div>
			    </div>
			  </div>
			    <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox" id="signup_terms"> I accept the <a href="#" ><u>Terms & Conditions</u></a>
			        </label>
			       </div>
			    </div>
			
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    </div>
			  </div>
	</div>
      		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" id="signup" class="btn btn-primary" value="Sign up"/>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Signup Modal Close -->

<!-- Signin Modal -->
<div class="modal fade bs-example-modal-sm" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
  
			<form class="form-horizontal">
  			 <div class="form-group">
			 	<div class="col-sm-12">
					<input type="text" class="form-control" id="signin_username" placeholder="Username" required>
				</div>
			 </div>   

			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="signin_password" placeholder="Password" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox" id="signin_rem"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-4 col-sm-10">
			      <button type="submit" class="btn btn-default" id="signin_btn">Sign in</button>
			    </div>
			  </div>
			</form>

      	</div>
      </div>
  </div>
</div>
<!-- Signin Modal Close -->
