<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public function datamenutampilkan()
	{
		$qry = "SELECT DISTINCT * FROM tbusersmenu ORDER BY menunm;";
		return $this->db->query($qry)->result_array();
	}

	public function getIdMenu($id){
		$qry = "SELECT DISTINCT * FROM tbusersmenu WHERE id = '$id' ORDER BY menunm";
		return $this->db->query($qry)->row_array();
	}
}
