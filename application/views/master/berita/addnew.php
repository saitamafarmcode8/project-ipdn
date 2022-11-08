<?= $breadcrumb; ?>
<!--Line with Area Chart 1 Starts-->
<div class="row">
	<div class="col-sm-6 offset-2">
		
		<div class="card">
			<div class="card-body mb-4">		
			<div class="px-3">
				<h4 class="card-title mb-4" style="padding-left: 2cm; padding-top: 25px;"> <?= $title; ?> </h4>
				
				<form class="form form-horizontal" method="POST" action="<?= base_url('news_halaman_berita_simpanbaru_xml'); ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-md-2 label-control" for="projectinput1">Judul Berita: </label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="judul">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 label-control" for="projectinput1">Kategori: </label>
						<div class="col-md-6">
							<select class="form-control" name="kategori">
								<option value="_blank">-Pilih Kategori-</option>
								<?php foreach($ktg as $k) :?>
									<option value="<?= $k['id']; ?>"><?= $k['ktgname']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 label-control" for="projectinput1">Isi Berita: </label>
						<div class="col-md-6">
							<div class="position-relative has-icon-left">
								<textarea id="timesheetinput7" rows="5" class="form-control" name="isiberita" placeholder="notes"></textarea>
								<div class="form-control-position">
									<i class="ft-file"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 offset-2">
							<img style="width: 130px; height: 120px;" src="<?= site_url('embed/default/default.jpg') ?>" class="img-thumbnail img-preview">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 label-control">File input</label>
						<div class="col-md-6">
							<div class="input-group">
								<div class="custom-file">
									<input type="file" <?php if(form_error('foto')==true) { ?> class="custom-file-input is-invalid" <?php }else{ ?> class="custom-file-input" <?php } ?> id="foto" name="foto" onchange="previewImg()">
									<label class="custom-file-label" for="exampleInputFile"> Input file : png, jpg, jpeg, pdf, gif </label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-2">
							<button type="submit" name="simpanberita" class="btn btn-sm btn-outline-dark">Simpan Data Berita</button>
							<button type="submit" name="savedraft" class="btn btn-sm btn-outline-danger">Batal Simpan</button>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
<!--Line with Area Chart 1 Ends-->
