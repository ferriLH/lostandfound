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
            $data = array(
                "title" => "Login |st an Lod Found"
            );
            $this->load->view('sign/V_Login',$data);
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
    public function forget(){
        $data = array(
            "title" => "Forgot Password | Lost and Found"
        );
        $this->load->view('sign/V_Forget',$data);
    }
    public function forget_auth(){
        $data = array(
            "title" => "Forgot Password | Lost and Found"
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sign/V_Forget',$data);
        }else{
            $email  = $this->input->post('email');
            $cek    = $this->M_Login->cek_mail($email);
            if($cek->num_rows() != 0){
                foreach ($cek->result() as $dat){
                    $sess_data['id'] = $dat->id_user;
                    $this->session->set_userdata($sess_data);
                }
                $id = $this->session->userdata('id');
                $this->mailForgot($email,$id);
                //$this->session->set_flashdata('success', '<br>Check Your Email');
                redirect('forget_pass',$data);
            }else {
                $this->session->set_flashdata('failed', '<br>Email you entered is not registered');
                redirect('forget_pass',$data);
            }
        }
    }
    public function mailForgot($toEmail,$id) {

        $to_email = $toEmail;
        $domain = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '')
            .'://'.$_SERVER['HTTP_HOST'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/');
        $mid = "C_Login/forget_pass_form/";
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'emailhapticproject@gmail.com',
            'smtp_pass' => 'NgentodSampeMampus2019', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE,
            'message' => "<a href='$domain$mid$id' target='_blank'>Click here to Change Your Password</a>"
        );

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']); // change it to yours
        $this->email->to($to_email);// change it to yours
        $this->email->subject('Forget Password');
        $this->email->message($config['message']);
        ini_set("SMTP",$config['smtp_host']);
        ini_set("smtp_port",$config['smtp_port']);

        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("success","<br>Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent","<br>Error in sending Email.");

    }
    public function forget_pass_form($id){
        $data = array(
            "title" => "Forget Password",
            "id" => $id
        );
        $this->load->view('sign/V_Forget_pass_form',$data);
    }
    public function forget_auth_form($id){
        $data = array(
            "title" => "Login Owner"
        );
        $this->form_validation->set_rules('password',   'Password',         'required|trim|xss_clean');
        $this->form_validation->set_rules('repassword', 'Confirm Password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sign/V_Forget_pass_form',$data);
        }else {
            $pwd = $this->input->post("password");
            $pass= $this->input->post("repassword");
            if($pwd!=$pass){
                $this->session->set_flashdata('failed', '<br>Password and Confirm Password Does not Match!');
                redirect('C_Login/forget_pass_form/'.$id);
            }else{
                $passs = sha1($pass);
                $this->M_Login->change_pass($passs,$id);
                $this->session->set_flashdata('success', '<br>Password Change Done. You can login with your new password below');
                redirect('login',$data);
            }
        }
    }
}