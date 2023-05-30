<?php defined('BASEPATH') OR exit('No direct script accessallowed'); 
class Kelola_Film extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('m_film');
		$this->load->model('m_kategori');
		$this->load->model('m_gallery');
	}
	public function kategori($id)
	{
		return $this->db->query("SELECT * FROM tbl_film AS ta JOIN tbl_kategori AS tk ON ta.`id_kategori` = tk.`id_kategori` WHERE ta.id_kategori=$id")->result();
	}
	// Read
	public function view_film()
	{
		$data['film']=$this->m_film->view_film(); 
		$data['konten']="view_film";
		$this->load->view('template_back', $data);
	}
	// Create
	public function tambah_film()
	{
		$data['list_kategori']=$this->m_kategori->ListKategori();
		$data['konten']="tambah_film";
		$this->load->view('template_back', $data);
	}
	// Proses Create 
	public function proses_tambah()
	{
		$data['film']=$this->m_film->proses_tambah();
		$msg="<script>alert('Data Berhasil Ditambah!')</script>"; 
		$this->session->set_flashdata("pesan", $msg);
		redirect("kelola_film/view_film");
	}
	// Get Data By ID 
	public function edit_film($id)
	{
		$data['list_kategori']=$this->m_kategori->ListKategori();
		$data['film']=$this->m_film->edit_film($id);
		$data['konten']="edit_film";
		$this->load->view('template_back', $data);
	}
	// Proses Update 
	public function proses_edit($id)
	{
		$this->m_film->proses_edit($id); 
		$msg="<script>alert('Data Berhasil Diedit!')</script>"; 
		$this->session->set_flashdata('pesan', $msg); 
		redirect("kelola_film/view_film");
	}
	// Delete
	public function hapus_film($id)
	{
		$this->m_film->hapus_film($id); 
		$msg="<script>alert('Data Berhasil Dihapus!')</script>";
		$this->session->set_flashdata('pasan', $msg); 
		redirect("kelola_film/view_film");
	}
	
}
?>