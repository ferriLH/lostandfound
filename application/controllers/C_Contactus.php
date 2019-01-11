<?php
/**
 * Created by PhpStorm.
 * User: Blacktrooper
 * Date: 1/9/2019
 * Time: 7:56 PM
 */

class C_Contactus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Contactus');
    }

    public function index()
    {
        $data = array(
            "title" => "Contact Us | Lost and Found"
        );
        $this->load->view('front/V_Contactus',$data);

    }

//    function sendcomplain()
//    {
//        $data['nama']        =   $this->input->post('nama');
//        $data['subject']     =   $this->input->post('subject');
//        $data['email']       =   $this->input->post('email');
//        $data['isi_pesan']   =   $this->input->post('isi_pesan');
//        $this->M_Contactus->send($data);
//    }
    function message(){
        date_default_timezone_set('Asia/Jakarta');
        $t      = date('Y/m/d H:i:s');
        $n      = $this->input->post('name');
        $e      = $this->input->post('email');
        $s      = $this->input->post('subject');
        $m      = $this->input->post('message');
        $this->M_Contactus->insertMessage($n,$e,$s,$m,$t);
        $this->session->set_flashdata('result_pesan', '<br>Message has been sent.');
        redirect('contact');

    }
}