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
    { 
             $data['nik']   =    $this->input->post('nik');
             $data['nama'] =   $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =  md5($this->input->post('password'));
             $data['alamat'] =  ($this->input->post('alamat'));

 
             $this->M_Signup->daftar($data);
             
             $pesan['message'] ="Pendaftaran berhasil";
             
             $this->load->view('sign/v_Success',$pesan);
    }
}
?>