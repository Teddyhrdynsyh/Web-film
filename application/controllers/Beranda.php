<?php defined('BASEPATH') OR exit ('No direct script acces allowed');
class Beranda extends CI_Controller {
  	public function __construct()
  	{
		parent::__construct(); 
		$this->load->model('M_Film');
		$this->load->model('M_Gallery');
		$this->load->model('M_Kategori');
  	}
    public function index()
	{
		$data['film']=$this->M_Film->view_film();
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['gallery']=$this->M_Gallery->view_gallery();  
		$data['konten']="trending";
		$data['upcoming']="upcoming";
		$this->load->view('template_front', $data);
	}
	public function film()
	{
		$data['film']=$this->M_Film->view_film();
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['gallery']=$this->M_Gallery->view_gallery(); 
		$data['konten']="view_kategori_front";  
		$this->load->view('view_film_front', $data);
	}
	public function gallery()
	{
		$data['film']=$this->M_Film->view_film();
		$data['gallery']=$this->M_Gallery->view_gallery(); 
		$data['kategori']=$this->M_Kategori->view_kategori();
		$this->load->view('view_gallery_front', $data);
	}

	// kategori front
	public function view_kategori_front($id)
	{

		$data['film']=$this->M_Film->kategori($id);
		$data['gallery']=$this->M_Gallery->view_gallery(); 
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['konten']="view_kategori_front";
		$this->load->view('view_film_front',$data);
	}
	public function streaming()
	{
		$data['film']=$this->M_Film->view_film();
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['gallery']=$this->M_Gallery->view_gallery(); 
		$data['konten']="streaming";  
		$this->load->view('view_video', $data);
	}
    
	public function search() {
		// Ambil keyword pencarian dari URL
		$searchKeyword = $this->input->get('searchKeyword');

		// Panggil model atau lakukan query ke database untuk mencari judul film yang cocok dengan keyword
		$this->load->model('M_Film');
		$searchResults = $this->M_Film->searchFilmByTitle($searchKeyword);

		// Kirim hasil pencarian ke view hasil_cari.php
		$data['searchResults'] = $searchResults;
		$data['keyword'] = $searchKeyword; // Mengirim nilai keyword ke view
		$this->load->view('hasil_cari', $data);
		
	}

	public function detail($id_film) {
		// Panggil model atau lakukan query ke database untuk mendapatkan detail film berdasarkan ID
		$this->load->model('M_Film');
		$filmDetail = $this->M_Film->getFilmDetail($id_film);
	
		// Kirim detail film ke view streaming.php
		$data['film'] = $filmDetail;
		$this->load->view('streaming', $data);
	}
	




}


?>