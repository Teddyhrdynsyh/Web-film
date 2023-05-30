<?php defined ('BASEPATH') OR exit('No direct script access allowed');
class M_Kategori extends ci_Model{
public function __construct()
	{
		parent::__construct();
	}
	// Read 
	public function ListKategori()
	{
		return $this->db->query("SELECT * FROM tbl_kategori")->result();
	}
	public function view_kategori()
	{
		return $this->db->query("SELECT * FROM tbl_kategori")->result();
	}
	// Create
	public function proses_tambah()
	{
		$data=array(
		"nama_kategori"=>$this->input->post('nama_kategori'),
		);
		$this->db->insert("tbl_kategori", $data);
	}
	// Update
	public function edit_kategori($id)
	{
		$this->db->where("id_kategori", $id);
		return $this->db->get("tbl_kategori")->row();
	}

	public function proses_edit($id)
	{
		$data=array(
		"nama_kategori"=>$this->input->post('nama_kategori'), 
		); 
		$this->db->where("id_kategori", $id);
		return $this->db->update("tbl_kategori", $data);
	}

	// Delete
	public function hapus_kategori($id)
	{
		$this->db->where("id_kategori", $id); 
		return $this->db->delete("tbl_kategori");
	}
}
?>