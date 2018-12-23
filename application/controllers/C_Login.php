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
            echo"login";
            //redirect('dashboard');
        }else{
            echo"gagal login";
            //$this->load->view('sign/V_Login',$data);
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
            $cek    = $this->M_login->cek($usr,$psw);
            if($cek->num_rows() != 0){
                foreach ($cek->result() as $dat){
                    $sess_data['isLogin']       = TRUE;
                    $sess_data['id']            = $dat->id;
                    $sess_data['username']      = $dat->username;
                    $sess_data['password']      = $dat->password;
                    $sess_data['nama']          = $dat->nama;
                    $this->session->set_userdata($sess_data);
                }
                echo"Login";
                //redirect('dashboard');
            }else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah!');
                echo"gagal login";
                //redirect('login');
            }
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}