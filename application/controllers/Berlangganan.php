<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berlangganan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_Berlangganan');
    }

    public function index() {
        $data['paket'] = $this->M_Berlangganan->view_paket();
        $this->load->view('view_berlangganan', $data);
    }

    public function proses_langganan() {
        // Mendapatkan data dari form
        $jenis_langganan = $this->input->post('jenis_langganan');
        $durasi_langganan = $this->input->post('durasi_langganan');
        $harga_akhir = $this->input->post('hargaakhir');

        // Mendapatkan ID pengguna dari sesi
        $id_pengguna = $this->session->userdata('id');

        // Membuat data untuk diinsert ke tabel transaksi
        $data_transaksi = array(
            'id' => $id_pengguna,
            'id_paket' => $jenis_langganan,
            'tgl_mulai' => date('Y-m-d'),
            'tgl_akhir' => date('Y-m-d', strtotime("+" . $durasi_langganan . " months")),
            'hargaakhir' => $harga_akhir
        );

        // Memanggil model dan melakukan insert ke tabel transaksi
        $id_transaksi = $this->M_Berlangganan->insert_transaksi($data_transaksi);

        if ($id_transaksi) {
            echo "Berlangganan berhasil";
            redirect('/beranda');
        }else{
            redirect('beranda');
        }
    }
}
?>
