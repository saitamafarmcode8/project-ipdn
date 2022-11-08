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
				<h4 class="card-title"> List Users Rule System </h4>
			</div>
			<div class="card-body">
				<div class="px-3">
				<hr class="mt-1 mb-1">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Icon Menu</th>
							<th>Nama Menu</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($menu as $m) : ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><span class="badge badge-info"><i class="<?= $m['icon'] ?>"></i></span></td>
								<td><?= $m['menunm']; ?><hr class="mb-1 mt-1"><?php if($m['menu_active']==1){ echo "<span class='badge badge-success'>Aktif</span>"; }else{ echo "<span class='badge badge-danger'>Tidak Aktif</span>"; } ?></td>
								<td>
									<a href="<?= base_url('news_kelolamenu_edit_data_xml/'.$m['id']); ?>" class="btn btn-raised btn-outline-info btn-min-width mr-1 mb-1"><i class="ft-edit-3"></i></a>
									<a href="<?= base_url('news_kelolamenu_hapus_data_xml/'.$m['id']); ?>" class="btn btn-raised btn-outline-danger btn-min-width mr-1 mb-1"><i class="ft-delete"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Nama Access</th>
							<th>Rule</th>
							<th>Opsi</th>
						</tr>
					</tfoot>
				</table>
				</div>
			</div>
			<!-- End Card -->
		</div>
	</div>
</div>
