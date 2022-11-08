<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Halaman Dashboard -ipdn - NTB-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><u>Dashboard</u></a>
			</h6>
		</nav></div>';
		?>
		<style>
			body {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 1.124em;
				font-weight: normal;
			}
		</style>
		<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>embed/profile/lambang_ipdn.png"/>
		<script src="<?= base_url() ?>bundle/sweetalert/sweetalert.min.js"></script>
		<?php
		$data["users"] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		if($data["users"]==""){
			?>
			<body><script type="text/javascript">
				swal('Border', 'Access Denied Time Has Limited', 'info').then((result)=>{
					window.location="<?= site_url('logout')?>";
				});
			</script></body>
			<?php
		}
		$this->template->load('templates/dash/paper', 'dashboard/data', $data);
	}
}
