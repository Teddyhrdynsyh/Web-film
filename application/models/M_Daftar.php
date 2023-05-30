<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daftar extends CI_Model {

 	public function __construct()
	{
		parent::__construct();
	}
	// Create
	public function proses_tambah()
	{
		$data=array(
		"nama"=>$this->input->post('nama'),
		"username"=>$this->input->post('username'),
		"password"=>$this->input->post('password'),
		"confirm_password"=>$this->input->post('password'),
		);
		$this->db->insert("tbl_user", $data);
	}
}
?>