<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Journal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model', 'kategori');
		$this->load->model('Jurnal_model', 'jurnal');
	}

	public function index()
	{
		$data['title'] = "Halaman Jurnal Berita -Halaman Berita-";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Jurnal</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->jurnal->getDataJurnal()->result_array();
		$this->template->load('templates/dash/paper', 'master/jurnal/data', $data);
	}
}
