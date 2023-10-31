<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct()
	{
		parent::__construct(); 
		$this->load->model('m_daftar');
	}

    public function index()
    {
        $this->load->view('view_daftar');
    }

    public function proses_daftar()
{
    // Mengambil data dari form
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level = 2; // Level otomatis 1
    $confirm_password = $this->input->post('konfirpass');

    // Memeriksa apakah password dan konfirmasi password sama
    if ($password != $confirm_password) {
        echo "Password tidak sesuai dengan konfirmasi password";
        exit();
    }

    $koneksi = mysqli_connect("localhost", "root", "", "film");

    // Memeriksa apakah username sudah terdaftar di database
    $result = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username'");
    if (!$result) {
        echo "Error: " . mysqli_error($koneksi);
        exit();
    }
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah terdaftar";
        exit();
    }

    // Mengenkripsi password menggunakan MD5
    $hashed_password = md5($password);

    // Menambahkan data user baru ke database
    $query = "INSERT INTO tbl_user (username, nama, password, level) VALUES ('$username', '$nama', '$hashed_password', '$level')";
    if (mysqli_query($koneksi, $query)) {
        echo "Registrasi berhasil";
        redirect('login');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Menutup koneksi ke database
    mysqli_close($koneksi);
}



}
?>