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
        $data = array(
            "title" => "Sign Up | Lost and Found"
        );
        $this->load->view('sign/V_Signup',$data);
    }
    function confirm()
    {
        $data['nik']        =   $this->input->post('nik');
        $data['nama']       =   $this->input->post('username');
        $data['email']      =   $this->input->post('email');
        $data['password']   =   sha1($this->input->post('repassword'));
        $data['alamat']     =   $this->input->post('alamat');
        $data['file_foto']  =   NULL;
        $data['file_ktp']   =   NULL;
        $data['status']     =   FALSE;
        $pass   =   $this->input->post('password');
        $cpass  =   $this->input->post('repassword');
        if ($pass!=$cpass){
            $this->session->set_flashdata('failed', "<br>Password Doens't Match!");
            $this->session->set_flashdata('success', NULL);
            redirect('signup');
        }else {
            $cek_nik    = $this->M_Signup->cek_nik($data['nik']);
            if ($cek_nik->num_rows() != 0){
                $this->session->set_flashdata('failed', "<br>NIK already exists");
                $this->session->set_flashdata('success', NULL);
                redirect('signup');
            }
            $cek_email    = $this->M_Signup->cek_email($data['email']);
            if ($cek_email->num_rows() != 0){
                $this->session->set_flashdata('failed', "<br>Email already exists");
                $this->session->set_flashdata('success', NULL);
                redirect('signup');
            }
            else{
                $this->M_Signup->daftar($data);
                $this->send_mail($data['email'],$data['nik']);
                $this->session->set_flashdata('success', "<br>Create Success. Please confirm your email address");
                $this->session->set_flashdata('failed', NULL);
                redirect('login');
            }
        }
    }
    public function send_mail($toEmail,$nik) {

        $to_email = $toEmail;
        $domain = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '')
            .'://'.$_SERVER['HTTP_HOST'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/');
        $mid = "C_Signup/activate/";
        $config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'emailhapticproject@gmail.com',
            'smtp_pass' => 'NgentodSampeMampus2019', // change it to yours
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1',
            'wordwrap'  => TRUE,
            'message'   => "<a href='$domain$mid$nik' target='_blank'>Click here to activate your account</a>"
        );

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']); // change it to yours
        $this->email->to($to_email);// change it to yours
        $this->email->subject('Activation Mail');
        $this->email->message($config['message']);
        ini_set("SMTP",$config['smtp_host']);
        ini_set("smtp_port",$config['smtp_port']);

        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent","Error in sending Email.");

    }
    public function activate($nik){
        $this->M_Signup->activate($nik);
        $this->session->set_flashdata('success', '<br>Your Account is active. You can login now');
        redirect('login');
    }
}
?>