<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal_model extends CI_Model
{
	public function getDataJurnal()
	{
		$this->db->select("*");
		$this->db->from("tbjournal");
		$this->db->join("tbkategori", "tbkategori.id = tbjournal.ktg_id");
		$this->db->order_by("namajurnal", "ASC");
		return $this->db->get();
	}
}
