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

        //mengambil data dari form
        $nama = $this->input->post('username');
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('password');

        //memeriksa apakah password dan konfirmasi password sama
        if ($password != $confirm_password) {
            echo "Password tidak sesuai dengan konfirmasi password";
            exit();
        }

        //memeriksa apakah username sudah terdaftar di database
        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($query) > 0) {
            echo "Username sudah terdaftar";
            exit();
        }

        //memeriksa apakah email sudah terdaftar di database
        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($query) > 0) {
            echo "Email sudah terdaftar";
            exit();
        }

        //menambahkan data user baru ke database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($koneksi, $query)) {
            echo "Registrasi berhasil";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        //menutup koneksi ke database
        mysqli_close($koneksi);
    }
}
?>