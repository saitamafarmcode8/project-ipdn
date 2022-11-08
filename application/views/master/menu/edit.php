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
					<hr class="grey">
					<div class="row grey">
						<div class="col-6 offset-3">
							<a><i class="ft-globe mr-1"></i> <b>Surabaya</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title"> Form Edit Kelola Menu </h4>
			</div>
			<div class="card-body">
				<div class="px-3">
					<form method="POST" action="<?= base_url('menu/update'); ?>" class="mb-4">
						<input type="hidden" class="form-control" name="id" value="<?= $rows['id']; ?>">
						<div class="form-group row">
							<label class="col-md-3 label-control" >Nama Menu</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="namamenu" autocomplete="OFF" autofocus value="<?= $rows['menunm']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control" >Link URL</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="link" autocomplete="OFF" autofocus value="<?= $rows['url']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control" >icon</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="icon" autocomplete="OFF" autofocus value="<?= $rows['icon']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control" ></label>
							<div class="col-md-9">
								<button type="submit" name="submit" class="btn btn-sm btn-outline-info"><i class="ft-repeat"></i>&nbsp; Perbarui Menu</button>
								<a href="<?= site_url('news_halaman_kelolamenu_data_xml'); ?>" class="btn btn-sm btn-outline-danger"><i class="ft-home"></i> Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>
