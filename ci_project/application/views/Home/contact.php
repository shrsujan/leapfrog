<?php $this->load->view('header');?>
<h3>Send Message</h3>
<form method="post" action="">
	<div class="row">	
		<div class="col-md-3">
			<input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo set_value('name');?>" /><br/>
			<?php echo form_error('name')?>
		</div>
	</div>
	<div class="row">	
		<div class="col-md-3">	
			<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>" /><br/>
			<?php echo form_error('email')?>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-3">		
			<input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo set_value('subject');?>" /><br/>
			<?php echo form_error('subject')?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<textarea class="form-control" name="message" placeholder="Your Message"><?php echo set_value('message');?></textarea><br/>
			<?php echo form_error('message')?>
		</div>		
	</div>	
			<button class="btn btn-md btn-success" type="submit" name="submit_btn">Submit</button>
	</div>
</form>
<?php $this->load->view('footer');?>