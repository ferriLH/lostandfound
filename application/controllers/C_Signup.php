<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Signup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Signup');
    }
    public function index()
    {
        $this->load->view('sign/V_Signup');
    }
    function confirm()
        $data['nama']       =   $this->input->post('username');
        $data['nik']        =   $this->input->post('nik');
        $data['password']   =   sha1($this->input->post('password'));
        $data['email']      =   $this->input->post('email');
        $data['alamat']     =   $this->input->post('alamat');
        $pass               =   $this->input->post('password');
        $cpass              =   $this->input->post('repassword');
        if ($pass!=$cpass){
            $this->session->set_flashdata('failed', "<br>Password Doens't Match!");
            $this->session->set_flashdata('success', NULL);

            redirect('signup');
        }else {
            $pwd = sha1($cpass);
            $this->M_Signup->daftar($data);
            $this->session->set_flashdata('success', "<br>Create Success. Please confirm your email address");
            $this->session->set_flashdata('failed', NULL);

            redirect('login');
        }
    }
}
?>