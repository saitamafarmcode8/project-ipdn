<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public function getUsers($id = null)
	{
		$this->db->from('tbusers');
		if($id != null){
			$this->db->where('username', $id);
			return $this->db->get()->row_array();
		}
		return $this->db->get();
	}

	public function getdatarule()
	{
		$this->db->from("tbusersrole");
		return $this->db->get()->result_array();
	}

	public function getdataroleaccess($id)
	{
		$this->db->select('tbusersrole.id as idrole, tbusersrole.nmrole as namarule');
		$this->db->from('tbusersrole');
		$this->db->where('tbusersrole.id', $id);
		return $this->db->get();
	}

	public function getdetailusers($id)
	{
		$this->db->select("*");
		$this->db->from("tbusers");
		$this->db->where("id", $id);
		return $this->db->get()->row_array();
	}

	public function perbaruiprofileimage($post)
	{
		$user = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		if($post['foto'] != null){
			$data['foto'] = $post['foto'];
			$data['updated_at'] = date("Y-m-d H:i:s");
		}
		$this->db->where("id", $post['id']);
		$this->db->update("tbusers", $data);
	}

	public function insertvisitors()
	{
		$users = $this->db->get_where("tbusers", ['username' => $this->input->post("username")])->row_array();
		$data = [
			'user_id' => $users['id'],
			'tgl_visit' => date("Y-m-d"),
			'timevisit' => date("H:i:s")
		];
		$this->db->insert("tbusersvisit", $data);
	}
}
