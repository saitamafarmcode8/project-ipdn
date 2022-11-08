<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Menu_model", "menu");
	}

	public function index()
	{
		$data['title'] = 'Halaman Profile -ipdn.blog.table-profile-';
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Users</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data["menu"] = $this->menu->datamenutampilkan();
		$this->template->load('templates/dash/paper', 'master/menu/data', $data);
	}

	public function edit($id)
	{
		$data['title'] = "Halaman Menu -ipdn.blog.menu-table";
		$data['breadcrumb'] = '
		<div class="mb-3">
		<h1 class="">Dashboard</h1><nav class="d-flex">
			<h6 class="mb-0">
			<a href="" class="text-reset"><b>Dashboard</b></a>
			<i class="ft ft-chevrons-right"></i>
			<a href="" class="text-reset"><u>Users</u></a>
			</h6>
		</nav></div>';
		$data['sessi'] = $this->db->get_where("tbusers", ['username' => $this->session->userdata('username')])->row_array();
		$data['rows'] = $this->menu->getIdMenu($id);
		$this->template->load('templates/dash/paper', 'master/menu/edit', $data);
	}
}
