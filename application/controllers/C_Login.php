<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/24/2018
 * Time: 2:15 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }
    public function index()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            redirect('dashboard');
        }else{
            $this->load->view('sign/V_Login');
        }
    }
    function auth()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sign/V_Login');
        }else{
            $usr    = $this->input->post('username');
            $psw    = sha1($this->input->post('password'));
            $cek    = $this->M_Login->cek($usr,$psw);
            if($cek->num_rows() != 0){
                foreach ($cek->result() as $dat){
                    $sess_data['isLogin']       = TRUE;
                    $sess_data['id_user']       = $dat->id_user;
                    $sess_data['nik']           = $dat->nik;
                    $sess_data['nama']          = $dat->nama;
                    $sess_data['email']         = $dat->email;
                    $sess_data['password']      = $dat->password;
                    $sess_data['alamat']        = $dat->alamat;
                    $sess_data['status']        = $dat->status;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            }else {
                $this->session->set_flashdata('failed', '<br>Username atau Password yang anda masukkan salah!');
                redirect('login');
            }
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}