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
		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title">Tambah Users Rule Access</h4>
			</div>
			<div class="card-body mb-4">
			<div class="px-3">
				<form method="POST" action="<?= base_url('users/createnewruleaccess'); ?>">
					<div class="row">
						<div class="col-md-6">
							<input class="form-control">
						</div>
						<div class="col-md-2">
							<button type="submit" name="simpannewroles" class="btn btn-md btn-outline-dark">Simpan Access Baru</button>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
		<div class="row">
			<?php 
			foreach($role as $r) : ?>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-block pt-3">
						<div class="clearfix">
							<img src="<?= base_url(); ?>bundle/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
							<span class="primary">May 17</span>
							<div class="actions float-right">
								<a href="<?= site_url('news_profile_rules_system_access_data_xml/'.$r['id']); ?>"><i class="ft-settings dark"></i></a>&nbsp;
								<a href="<?= site_url('users/access/'.$r['id']); ?>"><i class="ft-edit-3 info"></i></a>&nbsp;
								<a href="<?= site_url('users/access/'.$r['id']); ?>"><i class="ft-delete danger"></i></a>&nbsp;
							</div>
						</div><br/>
						<h5 class="text-bold-500 primary float-left"><?= $r['nmrole']; ?></h5>
					</div>
				</div>
			</div>
			<?php endforeach;
			?>
		</div>
	</div>
</div>
