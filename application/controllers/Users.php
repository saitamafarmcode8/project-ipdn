<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Users_model', 'users');
		$this->load->model('Menu_model', 'menu');
	}

	public function profilesession()
	{
		$data['title'] = 'Halaman Profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="#">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>profiles</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/dash/paper', 'master/users/detail', $data);
	}

	public function index()
	{
		$data['title'] = 'Halaman Profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="#">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Users</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['users'] = $this->users->getUsers()->result_array();
		$this->template->load('templates/dash/paper', 'master/users/data', $data);
	}

	public function usersrule()
	{
		$data['title'] = 'Halaman Profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="#">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="'.site_url('news_profile_rules_system_data_xml').'" class="text-reset"><u>Rules Access</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['role'] = $this->users->getdatarule();
		$this->template->load('templates/dash/paper', 'master/rules/data', $data);
	}

	public function edit($nik){
		$data['title'] = 'Halaman profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="#">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="'.site_url('news_profile_data_xml').'" class="text-reset"><u>Users</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['row'] = $this->db->get_where("tbusers", ['nikuser' => $nik])->row_array();
		$this->template->load('templates/dash/paper', 'master/users/edit', $data);
	}

	public function access($id)
	{
		$data['title'] = 'Halaman profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="#">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="'.site_url('news_profile_data_xml').'" class="text-reset"><u>Users</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->users->getdataroleaccess($id)->row_array();
		$data['menu'] = $this->menu->datamenutampilkan();
		$this->template->load('templates/dash/paper', 'master/rules/access', $data);
	}

	public function accessgivelimit()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];
		$result = $this->db->get_where('tbusersaccessmenu', $data);
		if($result->num_rows() < 1){
			$this->db->insert('tbusersaccessmenu', $data);
		}else{
			$this->db->delete("tbusersaccessmenu", $data);
		}
	}

	public function perbaruifotoprofile()
	{
		$id = $this->input->post("id");
		// var_dump($id);
		// die;
		$config['upload_path'] = "./embed/users/";
        $config['allowed_types'] = "gif|jpg|png|jpeg|svg|pdf";
        $config['max_sizes'] = 60000;
		$config['file_name'] = "UPD-".date('ymd').'_'.$id.'_'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		$post = $this->input->post(null, TRUE);

		if(isset($_POST['updateprofile'])){
			if(empty($post['foto']))
			{ ?>
			<style>
                body{
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 1.124em;
                    font-weight: normal;
                }
            </style>
			<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>embed/profile/lambang_ipdn.png"/>
            <script src="<?= base_url() ?>assets/sweetalert/sweetalert.min.js"></script>
			<body><script type="text/javascript">
                swal('Ooops', 'Maaf Field & Foto tidak boleh kosong.', 'error').then((result)=>{
                    window.location="<?= site_url('news_halaman_berita_data_xml')?>";
                });
            </script></body>
			<?php
			}
			if(@$_FILES['foto']['name'] != NULL)
			{
				if($this->upload->do_upload('foto'))
				{
					$datauserid = $this->users->getdetailusers($post['id']);
					if($datauserid['foto'] != null){
						$target_file = "embed/users/".$datauserid['foto'];
						unlink($target_file);
					}
					$post['foto'] = $this->upload->data('file_name');
					$this->users->perbaruiprofileimage($post);
					if($this->db->affected_rows() > 0){
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
						
						<body><script type="text/javascript">
							swal('success', 'Foto profile berhasil diperbarui.', 'info').then((result)=>{
								window.location="<?= site_url('news_profile_data_xml')?>";
							});
						</script></body>
						<?php
                    }
				}else{
					$error = $this->upload->display_errors();
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
						
						<body><script type="text/javascript">
							swal('failed', 'sepertinya terjadi kesalahan.', 'danger').then((result)=>{
								window.location="<?= site_url('news_profile_data_xml')?>";
							});
						</script></body>
						<?php
					
				}
			}else{
				$post['foto'] = null;
				$this->news->perbaruiberita($post);
				if($this->db->affected_rows() > 0){
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
					
					<body><script type="text/javascript">
						swal('success', 'Foto profile berhasil diperbarui.', 'info').then((result)=>{
							window.location="<?= site_url('news_profile_data_xml')?>";
						});
					</script></body>
					<?php
				}
			}
		}
	}

	public function perbaruiprofile()
	{
		if(isset($_POST['simpan_profilenik']))
		{
			$id = $this->input->post('idtag');
			$data = [
				'username' => $this->input->post('uname'),
				'email' => $this->input->post('email'),
				'nikuser' => $this->input->post('nik'),
				'nm_lengkap' => $this->input->post('nmlengkap'),
				'updated_at' => date('Y-m-d H:i:s')
			];
			$this->db->where("nikuser", $id);
			$this->db->update("tbusers", $data);
			if($this->db->affected_rows() > 0){
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
				
				<body><script type="text/javascript">
					swal('success', 'profile berhasil diperbarui.', 'info').then((result)=>{
						window.location="<?= site_url('news_profile_perbarui_xml/'.$id)?>";
					});
				</script></body>
				<?php
			}
		}
	}

	public function changepassword()
	{
		// $nik = $this->input->post('idpass');
		$data['user'] = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		$nik = $data['user']['nikuser'];
		$new = $this->input->post("password_baru");
		$old = $this->input->post("password_lama");
		$rep = $this->input->post("repeat_password");
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
		if(!password_verify($old, $data['user']['password'])){
			?>
			<body><script type="text/javascript">
				swal('gagal', 'password tidak sesuai dengan yang lama', 'error').then((result)=>{
					window.location="<?= site_url('news_profile_perbarui_xml/'.$data['user']['nikuser']) ?>";
				});
			</script></body>
			<?php
		}else{
			if($old == $new){
				?>
				<body><script type="text/javascript">
					swal('gagal', 'password tidak boleh sama', 'error').then((result)=>{
						window.location="<?= site_url('news_profile_perbarui_xml/'.$data['user']['nikuser'])?>";
					});
				</script></body>
				<?php
			}else{
				$password_hash = password_hash($new, PASSWORD_DEFAULT);
				$this->db->set('updated_at', date('Y-m-d H:i:s'));
				$this->db->set('password', $password_hash);
				$this->db->where('nikuser', $data['user']['nikuser']);
				$this->db->update('tbusers');
				?>
				<body><script type="text/javascript">
					swal('success', 'password profile telah diperbarui', 'success').then((result)=>{
						window.location="<?= site_url('news_profile_perbarui_xml/'.$data['user']['nikuser'])?>";
					});
				</script></body>
				<?php
			}
		}
	}

	public function hapus($nik){
		var_dump($nik);
		die;
	}

	public function detail($nik){
		var_dump($nik);
		die;
	}

	public function activate($nik){
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
		$this->db->set('is_active', 1);
		$this->db->where("nikuser", $nik);
		$this->db->update("tbusers");
		?>
		<body><script type="text/javascript">
			swal('success', 'User telah aktif', 'success').then((result)=>{
				window.location="<?= site_url('news_profile_data_xml')?>";
			});
		</script></body>
		<?php
	}

	public function deactivate($nik){
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
		$this->db->set('is_active', 0);
		$this->db->where("nikuser", $nik);
		$this->db->update("tbusers");
		?>
		<body><script type="text/javascript">
			swal('informasi', 'User dinonaktifkan', 'info').then((result)=>{
				window.location="<?= site_url('news_profile_data_xml')?>";
			});
		</script></body>
		<?php
	}
}
