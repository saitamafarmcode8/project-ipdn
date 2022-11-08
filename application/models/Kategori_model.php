<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	function kategori_list()
	{
		$hasil = $this->db->query("SELECT * FROM tbkategori");
		return $hasil->result();
	}

	public function simpan_ktg($ktgnm)
	{
		$data = [
			'ktgname' => $ktgnm
		];
		$hasil = $this->db->insert("tbkategori", $data);
		return $hasil;
	}

	public function get_kategori_by_id($ktgid)
	{
		$res = $this->db->query("SELECT * FROM tbkategori WHERE id = '$ktgid'");
		if($res->num_rows()>0){
			foreach($res->result() as $data){
				$hasil = [
					'id' => $data->id,
					'ktgname' => $data->ktgname
				];
			}	
		}
		return $hasil;
	}

	public function update_kategori($ktgnm, $ktgid){
		$hasil = $this->db->query("UPDATE tbkategori SET ktgname = '$ktgnm' WHERE id = '$ktgid'");
		return $hasil;
	}
}
