<?= $breadcrumb; ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-dark">

			</div>
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
						<?php $bo=1; foreach($rows as $b): 
							$isi = $b['isinews'];
							$isi = substr($isi, 0, 100);
							$id = $b['nomorberita'];
							$judul = $b['title'];
							$link = set_linkurl($id,$judul);
							?>
							<tr>
								<td><?= $bo++; ?></td>
								<td><?= anchor('berita/detail/'.$link, $b['title']); ?></td>
								<td><?= $b['namaktg']; ?></td>
								<td class="text-truncate"><?= $isi; ?>...</td>
								<td><?= tgl_indo($b['tglposting']); ?></td>
								
								<td><a href="<?= base_url('news_halaman_berita_hapus_data_xml/'.$b['nomorberita']); ?>" onclick="return confirm('Apa kamu yakin berita akan dihapus ?')"><i class="ft-trash danger"></i></a></td>
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
