<div class="container container-normal py-4">
	<div class="row align-items-center g-4">
	<div class="col-lg">
		<div class="container-tight">
		<div class="text-center mb-4">
			<a href="." class="navbar-brand navbar-brand-autodark"><img src="<?= base_url(); ?>bundle/frontUI/static/logo.svg" height="36" alt=""></a>
		</div>
		<div class="card card-md">
			<div class="card-body">
				<h2 class="h2 text-center mb-4">Login to your account</h2>
				<form action="<?= base_url('auth'); ?>" method="post" autocomplete="off" novalidate>
					<div class="mb-3">
						<label class="form-label"> Username </label>
						<input type="text" class="form-control" placeholder="input username" name="username" autocomplete="off" autofocus="autofocus">
						<?= form_error('username', '<small class="text-danger" role="alert">', '</small>') ?>
					</div>
					<div class="mb-2">
						<label class="form-label">
							Password
							<span class="form-label-description">
							<a href="<?= base_url(); ?>bundle/frontUI/forgot-password.html">I forgot password</a>
							</span>
						</label>
						<div class="input-group input-group-flat">
							<input type="password" class="form-control"  placeholder="Password min 3 character & max 8 Character" name="password"  autocomplete="off">
						</div>
						<?= form_error('password', '<small class="text-danger" role="alert">', '</small>') ?>
					</div>
					<div class="form-footer mt-8">
						<button type="submit" class="btn btn-primary w-100">Sign in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center text-muted mt-3">
			
		</div>
		</div>
	</div>
	<div class="col-lg d-none d-lg-block">
		<img src="<?= base_url(); ?>bundle/frontUI/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto animate__animated animate__flipInX" alt="">
	</div>
	</div>
</div>
