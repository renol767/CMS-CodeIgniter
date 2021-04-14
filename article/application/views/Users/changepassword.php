<style>
	@media only screen and (max-width: 600px){
		.col-sm-4{
			top: 150px;
		}
	}
</style>
<div class="col-sm-4 col-sm-offset-4">
			<h2 style="margin-top: 20px" class="text-center"><?= $title; ?></h2>
			<form action="<?= base_url('users/changepassword'); ?>" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input type="password" class="form-control" name="current_password" placeholder="Current Password">
					<?= form_error('current_password', '<small class="text-danger-pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<label>New Password</label>
					<input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
					<?= form_error('new_password', '<small class="text-danger-pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<label>Confirm New Password</label>
					<input type="password" class="form-control" name="new_password2" id="new_password2" placeholder="Confirm New Password">
					<?= form_error('new_password2', '<small class="text-danger-pl-3">', '</small>'); ?>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form>

</div>
