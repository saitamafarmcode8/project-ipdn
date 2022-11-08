<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pageerror extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}	

	public function index()
	{
		$data['title'] = "System - ptsp.kemenag.surabaya - Masih Dalam Pembenahan.";
		$data['tag'] = "Loading...";
		$data['brand'] = "PTSP - Kemenag Wilayah Surabaya Kota";
		$data['information'] = "Halaman yang sedang anda buka tidak di-temukan..";
		$data['sosmed'] = '<div class="col-12 text-center pt-2">
			<p class="socialIcon card-text">
			<a class="white"><i class="fa fa-twitter-square"></i></a>
			<a class="white"><i class="fa fa-google-plus-square"></i></a>
			</p>
		</div>';
		$this->template->load('templates/error/paper', 'errors/404', $data);
	}

	public function maintenance(){
		$data['title'] = "System - ptsp.kemenag.surabaya - Masih Dalam Pembenahan.";
		$data['tag'] = "Service System Administration";
		$data['brand'] = "PTSP - Kemenag Wilayah Surabaya Kota";
		$data['information'] = "Maaf untuk ke-tidaknyamanannya System Admin - ptsp.kemenag.surabaya - Masih Dalam Pembenahan.";
		$data['sosmed'] = '<div class="col-12 text-center pt-2">
			<p class="socialIcon card-text">
			<a class="white"><i class="fa fa-facebook-square"></i></a>
			<a class="white"><i class="fa fa-twitter-square"></i></a>
			<a class="white"><i class="fa fa-google-plus-square"></i></a>
			<a class="white"><i class="fa fa-linkedin-square"></i></a>
			</p>
		</div>';
		$this->template->load('templates/error/paper', 'errors/maintenance', $data);
	}
}
