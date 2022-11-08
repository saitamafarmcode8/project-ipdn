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

	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-block pt-3">
						<div class="clearfix">
							<img src="<?= base_url(); ?>bundle/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
							<span class="primary"><?= tgl_indo(date('Y-m-d')); ?></span>
						</div><br/>
						<h5 class="text-bold-500 primary float-left"><?= $rows['namarule']; ?></h5>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title">List Menu Access</h4>
			</div>
			<div class="card-body mb-4">
				<div class="px-3">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Menu</th>
							<th>Access</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($menu as $m) : ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $m['menunm']; ?></td>
								<td>
									<div class="form-check">
									<input class="form-check-input" type="checkbox" <?= check_access($rows['idrole'], $m['id']); ?> 
									data-role="<?= $rows['idrole']; ?>" 
									data-menu="<?= $m['id']; ?>">
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Nama Menu</th>
							<th>Access</th>
						</tr>
					</tfoot>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
