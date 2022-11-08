<!DOCTYPE html>
<html lang="en" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?= $title; ?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>bundle/page/logokemenag.jpg"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/vendors/css/chartist.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/vendors/css/switchery.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/brands.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/solid.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bundle/fonts/fontawesome-6/fontawesome-6/css/all.min.css">
    <!-- END Page Level CSS-->
	<?php include "csscript.php"; ?>
	<!-- End ui -->
	<style>
		.grey-bg {  
			background-color: #F5F7FA;
		}
	</style>
</head>
<body data-col="2-columns" class=" 2-columns ">
    <div class="wrapper">

		<!-- main menu-->
		<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
		<div data-active-color="white" data-background-color="purple-bliss" data-image="<?= base_url(); ?>bundle/img/sidebar-bg/01.jpg" class="app-sidebar">
			<!-- main menu header-->
			<!-- Sidebar Header starts-->
			<div class="sidebar-header">
				<div class="logo clearfix">
					<a href="<?= base_url('ptsp_lintasit_kemenag_dashboard'); ?>" class="logo-text float-left">
						<div class="logo-img"><img src="<?= base_url(); ?>bundle/img/logo-kemenag-new.png"/></div>
						<span class="text align-middle">&nbsp;&nbsp;&nbsp;PTSP</span>
					</a>
				</div>
			</div>
			<!-- Sidebar Header Ends-->
			<!-- / main menu header-->
			<!-- main menu content-->
			<?php include "menu.php"; ?>
		<!-- main menu content-->
		<div class="sidebar-background"></div>
		<!-- main menu footer-->
		<!-- include includes/menu-footer-->
		<!-- main menu footer-->
		</div>
		<!-- / main menu-->


		<!-- Navbar (Header) Starts-->
		<?php include "header.php"; ?>
		<!-- Navbar (Header) Ends-->

		<div class="main-panel">
			<div class="main-content">
				<div class="content-wrapper"><!--Statistics cards Starts-->
					<?= $contents; ?>
				</div>
		</div>
    <?php include "footer.php"; ?>
    <script src="<?= base_url(); ?>bundle/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    
	<script src="<?= base_url(); ?>bundle/vendors/js/switchery.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>bundle/js/switch.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="<?= base_url(); ?>bundle/js/app-sidebar.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>bundle/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
	<script src="<?= base_url(); ?>bundle/js/components-modal.min.js" type="text/javascript"></script>
	<?php include "jscript.php"; ?>
    <!-- END PAGE LEVEL JS-->
	<script>
		$('.form-check-input').on('click', function(){
			const val_menuId = $(this).data('menu');
			const val_roleId = $(this).data('role');

			$.ajax({
				url : "<?= base_url('news_profile_access_change'); ?>",
				type : 'POST',
				data : {
					menuId: val_menuId,
					roleId: val_roleId
				},
				success: function(){
					document.location.href = "<?= base_url('users/accessgivelimit/'); ?>" + roleId;
				}
			});
		});
	</script>
</body>
</html>
