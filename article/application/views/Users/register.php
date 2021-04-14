<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
	<div class="form-group row">
		<div class="col-sm-4 col-sm-offset-4">
			<h2 style="margin-top: 20px" class="text-center"><?= $title; ?></h2>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Your Name">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="address" placeholder="Your Address">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Your Email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Your Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Your Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
