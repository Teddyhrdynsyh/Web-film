<?php defined ('BASEPATH') OR exit('No direct script access allowed');
class M_Film extends ci_Model{
public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Gallery');
	}
	// Read 
	public function view_film()
	{
		return $this->db->query("SELECT * FROM tbl_film AS ta JOIN
		tbl_kategori AS tk ON ta. `id_kategori` =tk. `id_kategori`")->result();
	}
	public function kategori($id)
	{
		return $this->db->query("SELECT * FROM tbl_film AS ta JOIN tbl_kategori AS tk ON ta.`id_kategori` = tk.`id_kategori` WHERE ta.id_kategori=$id")->result();
	}
	
	// Create
	public function proses_tambah()
	{
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		$tipe_file = $_FILES['gambar']['type'];
		$nama_file = $_FILES['gambar']['name'];
		$direktori = "assets/poster/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file,$direktori);
		}
		$data=array(
		"gambar"=>$nama_file,
		"nama_film"=>$this->input->post('nama_film'),
		"tahun"=>$this->input->post('tahun'),
		"id_kategori"=>$this->input->post('id_kategori'),
		"rating"=>$this->input->post('rating'),
		"tautan"=>$this->input->post('tautan'),
		);
		$this->db->insert("tbl_film",$data);
	}
	// Update
	public function edit_film($id)
	{
		$this->db->where("id_film", $id);
	return $this->db->get("tbl_film")->row();
	}

	public function proses_edit($id)
	{
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		$tipe_file = $_FILES['gambar']['type'];
		$nama_file = $_FILES['gambar']['name'];
		$direktori = "assets/poster/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file,$direktori);
		}
		$data=array(
		"gambar"=>$nama_file,
		"nama_film"=>$this->input->post('nama_film'),
		"tahun"=>$this->input->post('tahun'),
		"id_kategori"=>$this->input->post('id_kategori'),
		"rating"=>$this->input->post('rating'),
		"tautan"=>$this->input->post('tautan'),
		);
		$this->db->where("id_film",$id);
		return $this->db->update("tbl_film",$data);
	}

	// Delete
	public function hapus_film($id)
	{
		$this->db->where("id_film", $id); 
		return $this->db->delete("tbl_film");
	}
}
?>