<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        if($this->session->userdata("level"))
        {
            redirect("login");
        }
        $this->load->view('view_login');
    }
    public function ceklogin()
    {
        $this->load->model('m_login');
        $this->m_login->ceklogin();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $msg="<script>alert('Data Berhasil Dihapus!')</script>";
        $this->session->set_flashdata('pesan', $msg);
        redirect("login");
    }
}
?>