<?= $breadcrumb; ?>
<!-- <div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
	Hi <b><?= $user['nmlengkap']; ?></b> !! <strong>Selamat Datang Di PTSP.</strong> <a href="<?= site_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="alert-link">Kemenag Wilayah Kota Surabaya</a> Periode Tahun <?= date('Y'); ?>.
</div> -->
<!--Line with Area Chart 1 Starts-->
<div class="row">
	<div class="col-sm-3">
		<div class="card">
			<div class="card-header text-center text-truncate">
				<img src="<?= site_url('embed/default/user_default_2.png'); ?>" alt="AN" width="150" class="rounded-circle">
			</div>
			<div class="card-body">
				<div class="card-block text-center">
					<h4 class="card-title">Administrator System</h4>
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
	</div>
	<div class="col-sm-9">
		
		<div class="card">
			<div class="card-body mb-4">		
				<h4 class="card-title mb-4" style="padding-left: 2cm; padding-top: 25px;"> <?= $title; ?> </h4>
				<table class="table table-striped table-bordered scroll-vertical" id="myData">
					<thead>
						<div style="padding-left: 1cm;" class="text-truncate">
						<a href="#" class="btn btn-dark btn-outline" data-toggle="modal" data-target="#modaladd"><i class="ft-tag"></i><span> Tambah Data Kategori</span></a>
						</div>
						<tr>
							<th >#</th>
							<th >Nama Kategori</th>
							<th >Opsi</th>
						</tr>
					</thead>
					<tbody id="show_data">
						
					</tbody>
					<tfoot>
						<tr>
							<th >#</th>
							<th >Nama Kategori</th>
							<th >Opsi</th>
						</tr>
					</tfoot>
				</table>

			</div>
		</div>

	</div>
</div>
<!--Line with Area Chart 1 Ends-->
<div class="modal fade text-left" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Form Tambah Katgeori</label>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" id="form-kategori" class="form-kategori">
				<div class="modal-body">
					<label>Nama Kategori: </label>
					<div class="form-group">
						<input type="text" placeholder="Input Nama Kategori" name="namaktg" id="namaktg" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-outline-danger btn-sm" data-dismiss="modal" value="close">
					<button type="submit" class="btn btn-outline-dark btn-sm" id="btn_simpan_ktg">Simpan Kategori</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Form Tambah Katgeori</label>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" id="form-kategori" class="form-kategori">
				<input type="hidden" class="form-control" name="idedit" id="id2">
				<div class="modal-body">
					<label>Nama Kategori: </label>
					<div class="form-group">
						<input type="text" placeholder="Input Nama Kategori" name="namaktgedit" id="namaktg2" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-outline-danger btn-sm" data-dismiss="modal" value="close">
					<button type="submit" class="btn btn-outline-dark btn-sm" id="btn_update_ktg">Simpan Kategori</button>
				</div>
			</form>
		</div>
	</div>
</div>
