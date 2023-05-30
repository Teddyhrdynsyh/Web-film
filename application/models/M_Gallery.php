<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Gallery extends ci_Model {
	public function __construct()
	{
		parent::__construct();
	}
	// Read
	public function view_gallery()
	{
		return $this->db->query("SELECT * FROM tbl_paket")->result();
	}
	// Create
	public function proses_tambah()
	{
		$data=array(
		"nama_paket"=>$this->input->post('nama_paket'),
		"harga"=>$this->input->post('harga'),
		"diskon"=>$this->input->post('diskon'),
		);
		$this->db->insert("tbl_paket", $data);
	}
	// Update
	public function edit_gallery($id)
	{
		$this->db->where("id_paket",$id);
		return $this->db->get("tbl_paket")->row();
	}
	public function proses_edit($id)
	{
		$data=array(
			"nama_paket"=>$this->input->post('nama_paket'),
			"harga"=>$this->input->post('harga'),
			"diskon"=>$this->input->post('diskon'),
		);
		$this->db->where("id_paket",$id);
		return $this->db->update("tbl_paket",$data);
	}
	// Delete
	public function hapus_gallery($id)
	{
		$this->db->where("id_paket",$id);
		return $this->db->delete("tbl_paket");
	}
}
?>