<?= $breadcrumb; ?>
<div class="row">
	<div class="col-sm-3">

		<div class="card">
			<div class="card-header text-center text-truncate">
				<img src="<?= base_url('embed/users/'.$sessi['foto']); ?>" alt="AN" width="150" class="rounded-circle">
			</div>
			<div class="card-body">
				<div class="card-block text-center">
					<h4 class="card-title"><?= $sessi['nm_lengkap']; ?></h4>
					<p class="category text-gray font-small-4">Ninja Developer</p>
					<hr class="grey">
					<div class="row grey">
						<div class="col-6 offset-3">
							<a><i class="ft-globe mr-1"></i> <b>Surabaya</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header text-center text-truncate">
				<h4 class="card-title"> Perbarui Foto Profile </h4>
			</div>
			<div class="card-body mb-3">
				<div class="px-3">
					<form method="POST" action="<?= base_url('proses_perbarui_profile_foto'); ?>" enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-md-6 offset-2">
								<img style="width: 130px; height: 120px;" src="<?= site_url('embed/default/user_default_4.png') ?>" class="img-thumbnail img-preview">
							</div>
						</div>
						<label>Pilih Gambar</label>
						<input type="hidden" name="id" class="form-control" value="<?= $sessi['id']; ?>">
						<div class="input-group mb-3">
							<div class="input-group">
								<div class="custom-file">
								<input type="file" <?php if(form_error('foto')==true) { ?> class="custom-file-input is-invalid" <?php }else{ ?> class="custom-file-input" <?php } ?> id="foto" name="foto" onchange="previewImgUsers()">
									<label class="custom-file-label" for="exampleInputFile"> Input file : png, jpg, jpeg, pdf, gif </label>
								</div>
							</div>
						</div>
						<p>Ext : <strong>Gambar pilih seperti PNG, JPG, JPEG</strong></p>
						<p>File : <?= $sessi['foto']; ?> </p>
						<hr class="mb-2 mt-2">
						<button type="submit" name="updateprofile" class="btn btn-success"><i class="ft-upload-cloud"></i> Perbarui Foto Profile</button>
					</form>
				</div>
			</div>
		</div>

	</div>

	<div class="col-sm-6">
		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title"> Detail User Profile </h4>
			</div>
			<div class="card-body">
				<div class="px-3">
					<form class="form" method="POST" action="#">
						<div class="form-body">
							<div class="row">
								<input type="hidden" class="form-control" name="idtag" value="<?= $sessi['nikuser']; ?>">
								<div class="form-group col-6 mb-2">
									<label>Nama Lengkap</label>
									<input type="text" value="<?= $sessi['nm_lengkap']; ?>" class="form-control" name="nmlengkap" autofocus="autofocus" autocomplete="off">
								</div>
								<div class="form-group col-6 mb-2">
									<label>Username</label>
									<input type="text" class="form-control" value="<?= $sessi['username']; ?>" name="uname" autofocus="autofocus" autocomplete="off">
								</div>
								<div class="form-group col-6 mb-2">
									<label>E-mail</label>
									<input type="text" class="form-control" value="<?= $sessi['email']; ?>" name="email" autofocus="autofocus" autocomplete="off">
								</div>
								<div class="form-group col-6 mb-2">
									<label>Nik User</label>
									<input type="text" class="form-control" value="<?= $sessi['nikuser']; ?>" name="nik" autofocus="autofocus" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="form-actions center">
							<button type="button" class="btn btn-raised btn-warning mr-1">
								<i class="ft-x"></i> Cancel
							</button>
							<button type="submit" name="simpan_profilenik" class="btn btn-raised btn-info">
								<i class="fa fa-check-square-o"></i> Perbarui Profile
							</button>
						</div>
					</form>
				</div>
			</div>
			<!-- End Card -->
		</div>

		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title"> Change Password Profile </h4>
			</div>
			<div class="card-body">
				<div class="px-3">
					<form class="form" method="POST" action="#">
						<input type="hidden" name="idpass" class="form-control" value="<?= $sessi['nikuser']; ?>">
						<div class="form-body">
							<div class="row">
								<div class="form-group col-6 mb-2">
									<label>Password Lama</label>
									<input type="password" class="form-control" name="password_lama" autofocus="autofocus" autocomplete="off">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-6 mb-2">
									<label>Password Baru</label>
									<input type="password" class="form-control" name="password_baru" autofocus="autofocus" autocomplete="off">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-6 mb-2">
									<label>Ulangi Password Baru</label>
									<input type="password" class="form-control" name="repeat_password" autofocus="autofocus" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="form-actions center">
							<button type="button" class="btn btn-raised btn-warning mr-1">
								<i class="ft-x"></i> Cancel
							</button>
							<button type="submit" name="renewpass" class="btn btn-raised btn-danger">
								<i class="fa fa-check-square-o"></i> Perbarui Password
							</button>
						</div>
					</form>
				</div>
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>
