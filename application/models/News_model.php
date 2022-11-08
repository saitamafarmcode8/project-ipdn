<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
	public function simpanberita($post)
	{
		$user = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		$data = [
			'title' => $post['judul'],
			'kategori_id' => $post['kategori'],
			'isinews' => $post['isiberita'],
			'urlnews' => $post['judul'],
			'tglposting' => date('Y-m-d'),
			'penulis' => $user['nm_lengkap'],
			'foto' => $post['foto'],
			'created_at' => date('Y-m-d H:i:s')
		];
		$this->db->insert("tbnews", $data);
	}

	public function getdataberitadraft()
	{
		$users = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		if($users['role_id']==1)
		{
			$this->db->select("tbnewsdraft.id as nomorberita, tbkategori.id as idktg, tbnewsdraft.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
			$this->db->from("tbnewsdraft");
			$this->db->join("tbkategori", "tbkategori.id = tbnewsdraft.kategori_id");
			$this->db->order_by("tbnewsdraft.id", "ASC");
		}elseif($users['role_id']==2){
			$this->db->select("tbnewsdraft.id as nomorberita, tbkategori.id as idktg, tbnewsdraft.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
			$this->db->from("tbnewsdraft");
			$this->db->join("tbkategori", "tbkategori.id = tbnewsdraft.kategori_id");
			$this->db->where("penulis != ", "Administrator System");
		}
		return $this->db->get();
	}

	public function getdetailberitadraft($id)
	{
		$this->db->select("tbnewsdraft.id as nomorberita, tbkategori.id as idktg, tbnewsdraft.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
		$this->db->from("tbnewsdraft");
		$this->db->join("tbkategori", "tbkategori.id = tbnewsdraft.kategori_id");
		$this->db->where("tbnewsdraft.id", $id);
		return $this->db->get()->row_array();
	}

	public function simpanberitadraft($post)
	{
		$user = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		$data = [
			'title' => $post['judul'],
			'kategori_id' => $post['kategori'],
			'isinews' => $post['isiberita'],
			'urlnews' => $post['judul'],
			'tglposting' => date('Y-m-d'),
			'penulis' => $user['nm_lengkap'],
			'foto' => $post['foto'],
			'created_at' => date('Y-m-d H:i:s')
		];
		$this->db->insert("tbnewsdraft", $data);
	}

	public function getdataberita()
	{
		$user = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		if($user['role_id']==1){
			$this->db->select("tbnews.id as nomorberita, tbkategori.id as idktg, tbnews.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
			$this->db->from("tbnews");
			$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
			$this->db->order_by("tbnews.id", "ASC");
		}else if($user['role_id']==2){
			$this->db->select("tbnews.id as nomorberita, tbkategori.id as idktg, tbnews.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
			$this->db->from("tbnews");
			$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
			$this->db->where("penulis !=", "Administrator System");
		}
		return $this->db->get();
	}

	public function getdataberitausers()
	{
		$this->db->select("tbnews.id as nomorberita, tbkategori.id as idktg, tbnews.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
		$this->db->from("tbnews");
		$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
		
		return $this->db->get();
	}

	public function getdataberitabefore($limit, $offset)
	{
		$this->db->select("*");
		$this->db->from("tbnews");
		$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
		$this->db->limit($limit,$offset);
		$this->db->order_by("created_at", "ASC");
		return $this->db->get();
	}

	public function searchberita($tglnow, $tglafter)
	{
		$this->db->select("*");
		$this->db->from("tbnews");
		$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
		$this->db->where("tglposting");
		$this->db->between($tglnow);
		$this->db->and($tglafter);
		$this->db->order_by("created_at", "ASC");
		return $this->db->get();
	}

	public function getdetailberita($id)
	{
		$this->db->select("tbnews.id as nomorberita, tbnews.kategori_id as kategori, tbkategori.id as idktg, tbkategori.ktgname as namaktg, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at");
		$this->db->from("tbnews");
		$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
		$this->db->where("tbnews.id", $id);
		return $this->db->get()->row_array();

	}

	public function perbaruiberita($post)
	{
		$user = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		$detail = [
			'title' => $post['judul'],
			'kategori_id' => $post['kategori'],
			'isinews' => $post['isiberita'],
			'urlnews' => $post['judul'],
			'tglposting' => date('Y-m-d'),
			'penulis' => $user['nm_lengkap'],
			'created_at' => date('Y-m-d H:i:s')
		];
		if($post['foto'] != null)
        {
            $detail['foto'] = $post['foto'];
        }
		$this->db->where("id", $post["id"]);
		$this->db->update("tbnews", $detail);
	}

	public function getIdnews($id = null)
	{
		if($id != null){
			$this->db->select("tbnews.id as nomorberita, tbkategori.id as idktg, tbnews.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
			$this->db->from("tbnews");
			$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
			$this->db->where("tbnews.id", $id);
			return $this->db->get()->row();
		}
		$this->db->select("tbnews.id as nomorberita, tbkategori.id as idktg, tbnews.kategori_id as kategori, title, urlnews, isinews, tglposting, penulis, dibaca, foto, created_at, updated_at, deleted_at, tbkategori.ktgname as namaktg");
		$this->db->from("tbnews");
		$this->db->join("tbkategori", "tbkategori.id = tbnews.kategori_id");
		return $this->db->get()->result();
	}
}
