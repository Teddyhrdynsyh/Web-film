<?php defined('BASEPATH') OR Exit ('No direct script acces allowed');
class M_Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ceklogin()
    {
        //variable
        $user=$this->input->post("user");
        
        $pass=MD5($this->input->post("pass"));
        $q="select * from tbl_user where username='$user' and password='$pass'";
        $db=$this->db->query($q);
        if ($db->num_rows()!=0)
        {
            $db=$db->row();
            if($db->level=="1")
            {
                $data=array('level'=>'Admin',);
                $this->session->set_userdata($data);
                $msg="<script>alert('Login Sebagai Admin')</script>";
                $this->session->set_flashdata("pesan",$msg);
                redirect('dashboard');
            }
            if ($db->level == "2") {
                $data = array('level' => 'Member');
                $this->session->set_userdata($data);
                $nama = $this->session->userdata('nama');
                $msg = "<script>alert('Anda Login Sebagai Member')</script>";
                $this->session->set_flashdata("pesan", $msg);
                $this->session->set_userdata('nama', $nama);
                redirect('beranda');
            }
        }else
        {
            $msg="<script>alert('Maaf! Username dan Password anda Salah')</script>";
            $this->session->set_flashdata("pesan",$msg);
            redirect('login');
        }
    }
}
?>