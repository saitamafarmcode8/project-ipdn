<?= $breadcrumb; ?>
<!-- <div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
	Hi <b><?= $user['nmlengkap']; ?></b> !! <strong>Selamat Datang Di PTSP.</strong> <a href="<?= site_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="alert-link">Kemenag Wilayah Kota Surabaya</a> Periode Tahun <?= date('Y'); ?>.
</div> -->
<!--Line with Area Chart 1 Starts-->
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body mb-4">		
			<div class="px-3">
				<h4 class="card-title mb-4" style="padding-left: 2cm; padding-top: 25px;"> <?= $title; ?> </h4>
				
				<table class="table table-striped table-bordered scroll-vertical mb-2">
					<thead>
						<tr>
							<th >#</th>
							<th >Judul Berita</th>
							<th >Kategori</th>
							<th >Isi Berita</th>
							<th >Tgl Upload</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $bo=1; foreach($berita_sebelumnya as $b): 
							$isi = $b['isinews'];
							$isi = substr($isi, 0, 100);
							$id = $b['id'];
							$judul = $b['title'];
							$link = set_linkurl($id,$judul);
							?>
							<tr>
								<td><?= $bo++; ?></td>
								<td><?= anchor('berita/detail/'.$link, $b['title']); ?></td>
								<td><?= $b['ktgname']; ?></td>
								<td class="text-truncate"><?= $isi; ?>...</td>
								<td><?= tgl_indo($b['tglposting']); ?></td>
								
								<td><a href="" class="btn btn-sm btn-outline-dark"><i class="ft-pencil-3"></i>Edit</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th >#</th>
							<th >Judul Berita</th>
							<th >Kategori</th>
							<th >Isi Berita</th>
							<th >Tgl Upload</th>
							<th>Opsi</th>
						</tr>
					</tfoot>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
<!--Line with Area Chart 1 Ends-->
