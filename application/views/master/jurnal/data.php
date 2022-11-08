<?= $breadcrumb; ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body mb-4">		
			<div class="px-3">
				<h4 class="card-title mb-4" style="padding-left: 2cm; padding-top: 25px;"> <?= $title; ?> </h4>
				<a href="<?= base_url(''); ?>"></a>
				<table class="table table-striped table-bordered scroll-vertical mb-2">
					<thead>
						<tr>
							<th >#</th>
							<th >Judul Jurnal</th>
							<th >Kategori</th>
							<th >Ukuran File</th>
							<th >Tgl Upload</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $jo=1; foreach($rows as $j): 
							$url = "news_halaman_journal_data_xml";
							$link = $url."_".$j['namajurnal'];
							?>
							<tr>
								<td><?= $jo++; ?></td>
								<td><a href="<?= base_url('halaman_download_file_jurnal_xml/'.$j['id']); ?>"><?= $link ?></a></td>
								<td><?= $j['ktgname']; ?></td>
								<td>2.5 MB</td>
								<td><?= tgl_indo($j['tglupload']); ?></td>
								
								<td><a href="<?= base_url('journal_hapus/'.$j['id']); ?>" onclick="return confirm('Apa kamu yakin berita akan dihapus ?')"><i class="ft-trash danger"></i></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th >#</th>
							<th >Judul Jurnal</th>
							<th >Kategori</th>
							<th >Ukuran File</th>
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
