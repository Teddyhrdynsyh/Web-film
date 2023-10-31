<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berlangganan extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function view_paket() {
        return $this->db->get('tbl_paket')->result_array();
    }

    public function insert_transaksi($data) {
        // Pastikan nilai 'id' dan 'id_paket' tidak null
        if (empty($data['id']) || empty($data['id_paket'])) {
            return false;
        }

        // Masukkan data transaksi ke tabel 'tbl_transaksi'
        $this->db->insert('tbl_transaksi', $data);

        // Ambil ID transaksi yang baru saja dimasukkan
        $id_transaksi = $this->db->insert_id();

        // Ambil data transaksi berdasarkan ID dengan JOIN ke tabel 'tbl_paket'
        $this->db->select('tbl_transaksi.id_transaksi, tbl_transaksi.id, tbl_transaksi.tgl_mulai, tbl_transaksi.tgl_akhir, tbl_transaksi.hargaakhir, tbl_paket.nama_paket');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_paket', 'tbl_transaksi.id_paket = tbl_paket.id_paket');
        $this->db->where('tbl_transaksi.id_transaksi', $id_transaksi);
        $query = $this->db->get();

        // Kembalikan data transaksi yang baru saja dimasukkan
        return $query->row();
    }
}
?>
