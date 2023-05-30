<?php defined('BASEPATH') OR exit('No direct script accessallowed'); 
class Kelola_Kategori extends CI_Controller
{
	Public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kategori');
		$this->load->model('M_Gallery');
		$this->load->model('M_Film');
	}
	//Read
	public function view_kategori()
	{
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['konten']="view_kategori";
		$this->load->view('template_back',$data);
	}
	//Create
	public function tambah_kategori()
	{
		$data['konten']="tambah_kategori";
		$this->load->view('template_back',$data);
	}
	//Proses_CReate
	public function proses_tambah()
	{
		$data['kategori']=$this->M_Kategori->proses_tambah();
		$msg="<script>alert('Data Berhasil Ditambah!')</script>";
		$this->session->set_flashdata("pesan",$msg);
		redirect("kelola_kategori/view_kategori");
	}
	//Get_Data_By-ID
	public function edit_kategori($id)
	{
		$data['kategori']=$this->M_Kategori->edit_kategori($id);
		$data['konten']="edit_kategori";
		$this->load->view('template_back',$data);
	}
	//Proses_update
	public function proses_edit($id)
	{
		$this->M_Kategori->proses_edit($id);
		$msg="<script>alert('Data Berhasil Diedit!')</script>";
		$this->session->set_flashdata('pesan',$msg);
		redirect("kelola_kategori/view_kategori");
	}
	//Delete
	public function hapus_kategori($id)
	{
		$this->M_Kategori->hapus_kategori($id);
		$msg="<script>alert('Data Berhasil Dihapus!')</script>";
		$this->session->set_flashdata('pesan',$msg);
		redirect("kelola_kategori/view_kategori");
	}
}
?>
