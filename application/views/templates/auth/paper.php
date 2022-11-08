<!doctype html>
<html lang="en">
  	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>Sign IN Aplikasi Blog Panel IPDN.</title>
		<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>embed/profile/lambang_ipdn.png"/>
		<!-- CSS files -->
		<link href="<?= base_url(); ?>bundle/frontUI/dist/css/tabler.min.css?1666304673" rel="stylesheet"/>
		<link href="<?= base_url(); ?>bundle/frontUI/dist/css/tabler-flags.min.css?1666304673" rel="stylesheet"/>
		<link href="<?= base_url(); ?>bundle/frontUI/dist/css/tabler-payments.min.css?1666304673" rel="stylesheet"/>
		<link href="<?= base_url(); ?>bundle/frontUI/dist/css/tabler-vendors.min.css?1666304673" rel="stylesheet"/>
		<link href="<?= base_url(); ?>bundle/frontUI/dist/css/demo.min.css?1666304673" rel="stylesheet"/>
		<link rel="stylesheet" href="<?= base_url(); ?>bundle/css/animate.min.css">
		<style>
		@import url('https://rsms.me/inter/inter.css');
		:root {
			--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}
		</style>
  	</head>
	<body  class=" border-top-wide border-primary d-flex flex-column">
		<script src="<?= base_url(); ?>bundle/frontUI/dist/js/demo-theme.min.js?1666304673"></script>
		<div class="page page-center">
		<?= $contents; ?>
		</div>
		<!-- Libs JS -->
		<!-- Tabler Core -->
		<script src="<?= base_url(); ?>bundle/frontUI/dist/js/tabler.min.js?1666304673" defer></script>
		<script src="<?= base_url(); ?>bundle/frontUI/dist/js/demo.min.js?1666304673" defer></script>
	</body>
</html>
