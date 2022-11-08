<?= $breadcrumb; ?>
<div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
	Hi <b><?= $sessi['nm_lengkap']; ?></b> !! <strong>Selamat Datang Di PTSP.</strong> <a href="<?= site_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="alert-link">Kemenag Wilayah Kota Surabaya</a> Periode Tahun <?= date('Y'); ?>.
</div>
<!--Line with Area Chart 1 Starts-->
<div class="row">
	<div class="col-sm-12">
		
		<div class="card">
			<div class="card-body mb-4">		
				<h4 class="card-title mb-4" style="padding-left: 2cm; padding-top: 25px;"> <?= $title; ?> </h4>
				<table class="table table-striped table-bordered scroll-vertical">
					<thead>
						<tr>
							<th style="width: 50px;">#</th>
							<th style="width: 45px;">Avatar</th>
							<th style="width: 450px;">Nama</th>
							<th>Email : </th>
							<th style="width: 390px;">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($users as $u) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td>
								<img src="<?= base_url('embed/users/'.$u['foto']); ?>" class="img-thumbnail" style="width: 90px; height: 90px;"></td>
							<td>
								<b><?= $u['nm_lengkap']; ?></b>
								<hr class="mb-2 mt-2">
								<table border="0" class="mt-1 text-left">
									<tr>
										<td>Status</td>
										<td>:</td>
										<td><?php if($u['is_active']==1){ echo '<span class="badge badge-success"> Aktif </span>'; }else{ echo '<span class="badge badge-danger"> Tidak Aktif </span>'; } ?><br/></td>
										<td>Tanggal</td>
										<td>:</td>
										<td><?php if($u['created_at']!=""){ echo '<span class="badge badge-dark"><i class="ft-calendar"></i> '.$u['created_at'].' </span>'; } ?></td>
									</tr>
								</table>
							</td>
							<td> 
								<b><i class="ft-at-sign"></i> <?= $u['email']; ?></b>
								<hr class="mb-2 mt-2">
								<table border="0" class="mt-1 text-left">
									<tr>
										<td>NIK</td>
										<td>:</td>
										<td><span class="badge badge-dark"><?= $u['nikuser']; ?></span><br/></td>
										<td>Status Email</td>
										<td>:</td>
										<td><?php if($u['email']!=""){ echo '<span class="badge badge-success"> Terverifikasi </span>'; }else{ echo '<span class="badge badge-danger"> Belum Terverifikasi </span>'; } ?></td>
									</tr>
								</table>
							</td>
							<td>
								<a href="<?= site_url('news_profile_perbarui_xml/'.$u['nikuser']); ?>" class="btn btn-sm btn-outline-info"><i class="ft-edit-3"></i> Edit </a>
								<a href="<?= site_url('news_profile_hapus_data_xml/'.$u['nikuser']); ?>" class="btn btn-sm btn-outline-danger"><i class="ft-trash"></i> Hapus </a>
								<a href="<?= site_url('news_profile_detail_data_xml/'.$u['nikuser']); ?>" class="btn btn-sm btn-outline-info"><i class="ft-monitor"></i> Detail </a>
								<?php if($u['is_active']=='1') :?>
								<a href="<?= site_url('news_deactivate_profile_data_xml/'.$u['nikuser']); ?>" onclick="return confirm('apakah kamu yakin user ini di-nonaktifkan ?')" class="btn btn-sm btn-outline-dark"><i class="ft-sliders"></i> Nonaktifkan </a>
								<?php else : ?>
								<a href="<?= site_url('news_activate_profile_data_xml/'.$u['nikuser']); ?>" onclick="return confirm('apakah kamu yakin user ini di-aktifkan ?')" class="btn btn-sm btn-outline-success"><i class="ft-sliders"></i> aktifkan </a>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; ?>
						
					</tbody>
					<tfoot>
						<tr>
							<th style="width: 50px;">#</th>
							<th style="width: 45px;">Avatar</th>
							<th style="width: 450px;">Nama Lengkap</th>
							<th>E-mail</th>
							<th style="width: 390px;">Opsi</th>
						</tr>
					</tfoot>
				</table>

			</div>
		</div>
	</div>
</div>
<!--Line with Area Chart 1 Ends-->
