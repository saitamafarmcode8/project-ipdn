<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model', 'kategori');
	}

	public function index()
	{
		$data['title'] = "Halaman Kategori Berita -ipdn.blog.table-kategori-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><b>Main Panel</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Kategori Berita</u></a>
			</h6>
		</nav></div>';
		// $data['user'] = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/dash/paper', 'master/kategori/data', $data);
	}

	public function data_kategori()
	{
		$data = $this->kategori->kategori_list();
		echo json_encode($data);
	}

	public function get_kategori()
	{
		$ktgid = $this->input->get("id");
		$data = $this->kategori->get_kategori_by_id($ktgid);
		echo json_encode($data);
	}

	public function simpan_kategori()
	{
		$ktgnm = $this->input->post('namaktg');
		$data = $this->kategori->simpan_ktg($ktgnm);
		echo json_encode($data);
	}

	public function update_kategori()
	{
		$ktgnm = $this->input->post('namaktgedit');
		$ktgid = $this->input->post('idedit');
		$data = $this->kategori->update_kategori($ktgnm, $ktgid);
		echo json_encode($data);
	}

	public function hapus_kategori(){
		$nmktg = $this->input->post('id');
		$data = $this->kategori->hapus_kategori($nmktg);
		echo json_encode($data);
	}
}
