<?= $breadcrumb; ?>
<?php if($users['nm_lengkap']==null) : ?>
	<?php echo "Maaf Authorized access has denied by system"; ?>
<?php else: ?>
	Hi <strong><?= $users['nm_lengkap']; ?></strong> !! <strong>Selamat Datang Di PTSP.</strong> <a href="<?= site_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="alert-link">Blognya Kampus IPDN</a> Periode Tahun <?= date('Y'); ?>.
<?php endif; ?>
