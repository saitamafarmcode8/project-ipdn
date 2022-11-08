<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model', 'news');
	}

	public function index()
	{
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->news->getdataberita()->result_array();
		$data['berita_sebelumnya'] = $this->news->getdataberitabefore(4, 3)->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/data', $data);
	}

	public function tampilkanberitahome()
	{
		$data['title'] = "Halaman Home Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->news->getdataberita()->result_array();
		$data['berita_sebelumnya'] = $this->news->getdataberitabefore(4, 3)->result_array();
		$this->template->load('templates/users/paper', 'master/berita/data', $data);
	}

	public function nulisberitadraft()
	{
		$data['title'] = "Halaman Berita Draft -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->news->getdataberitadraft()->result_array();
		$this->template->load('templates/users/paper', 'master/berita/draft', $data);
	}

	public function nulisberitabaru()
	{
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="'.base_url('news_halaman_berita_data_xml').'" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['ktg'] = $this->db->from("tbkategori")->get()->result_array();
		$this->template->load('templates/users/paper', 'master/berita/addnew', $data);
	}

	public function draftberita()
	{
		$data['title'] = "Halaman Berita Draft -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->news->getdataberitadraft()->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/draft', $data);
	}

	public function addnewberita()
	{
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="'.base_url('news_halaman_berita_data_xml').'" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['ktg'] = $this->db->from("tbkategori")->get()->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/addnew', $data);
	}

	public function simpandataberita()
	{
		$config['upload_path'] = "./embed/news/";
        $config['allowed_types'] = "gif|jpg|png|jpeg|svg|pdf";
        $config['max_sizes'] = 60000;
        $config['file_name'] = "NW-".date('ymd').'/'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['simpanberita'])){
			if(@$_FILES['foto']['name'] != null)
			{
				if($this->upload->do_upload('foto'))
				{
					$post['foto'] = $this->upload->data('file_name');
					$this->news->simpanberita($post);
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
						<body>
							<script type="text/javascript">
								swal('success.', 'Data berita berhasil disimpan.', 'success').then((result) => {
									window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
								});
							</script>
						</body>
						<?php
					}
				}
				else
				{
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
						<body>
							<script type="text/javascript">
								swal('error.', 'sepertinya terjadi kesalahan.', 'success').then((result) => {
									window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
								});
							</script>
						</body>
						<?php
				}
			}else{
				$post['foto'] = null;
				$this->news->simpanberita($post);
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
						<body>
							<script type="text/javascript">
								swal('success.', 'Data berita berhasil disimpan.', 'success').then((result) => {
									window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
								});
							</script>
						</body>
						<?php
				}
			}
		}else if(isset($_POST['savedraft']))
		{
			$config['upload_path'] = "./embed/news/draft/";
			$config['allowed_types'] = "gif|jpg|png|jpeg|svg|pdf";
			$config['max_sizes'] = 60000;
			$config['file_name'] = "DRF".date('ymd').'/'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);
			if(@$_FILES['foto']['name'] != null)
			{
				if($this->upload->do_upload('foto')){
					$post['foto'] = $this->upload->data('file_name');
					$this->news->simpanberitadraft($post);
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
						<body>
							<script type="text/javascript">
								swal('success.', 'Data berita berhasil disimpan sebagai draft.', 'success').then((result) => {
									window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
								});
							</script>
						</body>
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
					<body>
						<script type="text/javascript">
							swal('error.', 'sepertinya terjadi kesalahan.', 'success').then((result) => {
								window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
							});
						</script>
					</body>
					<?php
				}
			}
			else
			{
				$post['foto'] = null;
				$this->news->simpanberitadraft($post);
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
					<body>
						<script type="text/javascript">
							swal('success.', 'Data berita berhasil disimpan sebagai draft.', 'success').then((result) => {
								window.location = "<?= site_url('news_halaman_berita_data_xml'); ?>";
							});
						</script>
					</body>
					<?php
				}
			}
		}
		else if(isset($_POST['update_news'])){
			if(@$_FILES['foto']['name'] != NULL)
			{
				if($this->upload->do_upload('foto'))
				{
					$news = $this->news->getIdnews($post['id']);
					if($news->foto != null){
						$target_file = "./embed/news/".$news->foto;
						unlink($target_file);
					}
					
					$post['foto'] = $this->upload->data('filename');
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
							swal('Success', 'Data surat keluar berhasil di-perbarui.', 'info').then((result)=>{
								window.location="<?= site_url('news_halaman_berita_data_xml')?>";
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
							swal('Failed Load', 'Something wrong', 'danger').then((result)=>{
								window.location="<?= site_url('news_halaman_berita_data_xml')?>";
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
						swal('Success', 'Data berita berhasil di-perbarui.', 'info').then((result)=>{
							window.location="<?= site_url('news_halaman_berita_data_xml')?>";
						});
					</script></body>
					<?php
				}
			}
		}
	}

	public function perbaruiberita()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = "./embed/news/";
        $config['allowed_types'] = "gif|jpg|png|jpeg|svg|pdf";
        $config['max_sizes'] = 60000;
        $config['file_name'] = "UPD-".date('ymd').'/'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['update_news']))
		{
			if(empty($post['foto']))
			{ ?>
			<style>
                body{
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 1.124em;
                    font-weight: normal;
                }
            </style>
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
					$dataid = $this->news->getdetailberita($post['id']);
					if($dataid['foto'] != null){
						$target_file = "embed/news/".$dataid['foto'];
						unlink($target_file);
					}
					$post['foto'] = $this->upload->data('file_name');
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
							swal('success', 'Data berita berhasil di-perbarui.', 'info').then((result)=>{
								window.location="<?= site_url('news_halaman_berita_data_xml')?>";
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
						swal('failed', 'Sepertinya terjadi kesalahan.', 'error').then((result)=>{
							window.location="<?= site_url('news_halaman_berita_data_xml')?>";
						});
					</script></body>
					<?php
				}
			}else{
				$post['foto'] = null;
				$this->news->perbaruiberita($post);
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
					swal('success', 'Data berita berhasil di-perbarui.', 'info').then((result)=>{
						window.location="<?= site_url('news_halaman_berita_data_xml')?>";
					});
				</script></body>
				<?php
			}
		}
	}

	public function beritasebelumnya()
	{
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['berita_sebelumnya'] = $this->news->getdataberitabefore(4, 3)->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/before', $data);
	}

	public function detailberita($id){
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['d_berita'] = $this->news->getdetailberita($id);
		$data['ktg'] = $this->db->from("tbkategori")->get()->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/detail', $data);
	}

	public function detail($id)
	{
		$data['title'] = "Halaman Kategori Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['d_berita'] = $this->news->getdetailberita($id);
		$data['ktg'] = $this->db->from("tbkategori")->get()->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/detail', $data);
	}

	public function beritadraftdetail($id)
	{
		$data['title'] = "Halaman Detail Berita Draft -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Blogs</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['detail'] = $this->news->getdetailberitadraft($id);
		$data['ktg'] = $this->db->from("tbkategori")->get()->result_array();
		$this->template->load('templates/dash/paper', 'master/berita/detaildraft', $data);
	}

	public function beritahapus($id)
	{
		$data = $this->db->get_where("tbnews", ['id' => $id])->row_array();
		$foto = $data['foto'];
		if($foto != null){
			$target_file = "./embed/news/".$data['foto'];
			unlink($target_file);
		}
		$this->db->where('id', $id);
		$this->db->delete('tbnews');
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
				swal('info', 'berita berita berhasil dihapus.', 'success').then((result)=>{
					window.location="<?= site_url('news_halaman_berita_data_xml'); ?>";
				});
			</script></body>
			<?php
		}
	}
}
