<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kelola_Gallery extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Gallery');
	}
	// Read
	public function view_gallery()
	{
		$data['gallery']=$this->M_Gallery->view_gallery();
		$data['konten']="view_gallery";
		$this->load->view('template_back',$data);
	}
	// Create
	public function tambah_gallery()
	{
		$data['konten']="tambah_gallery";
		$this->load->view('template_back',$data);
	}
	// Proses_Create
	public function proses_tambah()
	{
		$data['gallery']=$this->M_Gallery->proses_tambah();
		$msg="<script>alert('Data Berhasil Ditambah!')</script>";
		$this->session->set_flashdata("pesan",$msg);
		redirect("kelola_gallery/view_gallery");
	}
	// Get_Data_By_ID
	public function edit_gallery($id)
	{
		$data['gallery']=$this->M_Gallery->edit_gallery($id);
		$data['konten']="edit_gallery";
		$this->load->view('template_back',$data);
	}
	// Proses_Update
	public function proses_edit($id)
	{
		$this->M_Gallery->proses_edit($id);
		$msg="<script>alert('Data Berhasil Diedit')</script>";
		$this->session->set_flashdata('pesan',$msg);
		redirect("kelola_gallery/view_gallery");
	}
	// Delete
	public function hapus_gallery($id)
	{
		$this->M_Gallery->hapus_gallery($id);
		$msg="<script>alert('Data Berhasil Dihapus')</script>";
		$this->session->set_flashdata('pesan',$msg);
		redirect("kelola_gallery/view_gallery");
	}
}
?>