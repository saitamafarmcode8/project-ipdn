<?= $breadcrumb; ?>
<div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
	<?php if($users['nm_lengkap']==null) : ?>
		<?= base_url('logout'); ?>
	<?php else: ?>
		Hi <strong><?= $users['nm_lengkap']; ?></strong> !! <strong>Selamat Datang Di PTSP.</strong> <a href="<?= site_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="alert-link">Blognya Kampus IPDN</a> Periode Tahun <?= date('Y'); ?>.
	<?php endif; ?>
</div>
<section id="minimal-statistics">
	<div class="row" matchheight="card">
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 danger">0</h3>
								<span>Blog</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-regular danger fa-newspaper fa-4x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left">
								<h3 class="mb-1 success">0</h3>
								<span>Visitors</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid success fa-users fa-4x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 warning">12%</h3>
								<span>Storage System</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid dark fa-server fa-4x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left">
								<h3 class="mb-1 primary">0</h3>
								<span>Gallery</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid primary fa-photo-film fa-4x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" matchheight="card">
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 primary">User Rules</h3>
								<span>System Access</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid primary fa-person-circle-exclamation fa-4x"></i>
							</div>
						</div>
						<div class="mt-2 mb-0">
							<ngb-progressbar type="primary" [value]="80" class="progress-bar-sm"></ngb-progressbar>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 warning">Menu System</h3>
								<span>Access Users Menu</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid danger fa-folder-tree fa-4x"></i>
							</div>
						</div>
						<div class="mt-2 mb-0">
							<ngb-progressbar type="warning" [value]="35" class="progress-bar-sm"></ngb-progressbar>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 success">Protection </h3>
								<span>Users Common</span>
							</div>
							<div class="media-right align-self-center">
								<i class="fa-solid dark fa-user-shield fa-4x"></i>
							</div>
						</div>
						<div class="mt-2 mb-0">
							<ngb-progressbar type="success" [value]="60" class="progress-bar-sm"></ngb-progressbar>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="px-3 py-3">
						<div class="media">
							<div class="media-body text-left text-truncate">
								<h3 class="mb-1 danger">Grafik</h3>
								<span>Data Dalam Grafik</span>
							</div>
							<div class="media-right align-self-center">
							<i class="fa-solid info fa-chart-line fa-4x"></i>
							</div>
						</div>
						<div class="mt-2 mb-0">
							<ngb-progressbar type="danger" [value]="40" class="progress-bar-sm"></ngb-progressbar>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row match-height">
	<div class="col-sm-12 col-xl-12 col-lg-12 col-12">
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<?php include "slider.php"; ?>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>	
	</div>
</div>

<div class="row match-height">
	<div class="col-xl-8 col-lg-12 col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">Visitors & Pembaca Dalam Grafik</h4>
			</div>
			<div class="card-body">
				<div class="card-block">
					<div class="chart-info mb-2">
						<span class="text-uppercase mr-3">
							<i class="fa fa-circle primary font-small-2 mr-1"></i> Pembaca 
						</span>
						<span class="text-uppercase">
							<i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Pengunjung 
						</span>
					</div>
					<div id="line-area2" class="height-400 lineAreaDashboard">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-12 col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Data Stats Interest</h4>
			</div>
			<div class="card-body">

				<div id="donut-dashboard-chart" class="height-250 donut">
				</div>

				<div class="card-block">
					<div class="row mb-3">
						<div class="col">
							<span class="mb-1 text-muted d-block">0% - Berita</span>
							<div class="progress" style="height: 5px;">
								<div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col">
							<span class="mb-1 text-muted d-block">8% - Visitors</span>
							<div class="progress" style="height: 5px;">
								<div class="progress-bar bg-amber" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col">
							<span class="mb-1 text-muted d-block">35% - Download</span>
							<div class="progress" style="height: 5px;">
								<div class="progress-bar bg-deep-purple bg-lighten-1" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0"
								 aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col">
							<span class="mb-1 text-muted d-block">28% - Users</span>
							<div class="progress" style="height: 5px;">
								<div class="progress-bar bg-blue" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
