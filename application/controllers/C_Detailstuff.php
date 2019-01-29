<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_Detailstuff extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('M_Detailstuff');
	}

	function index()
	{

		$id = $this->uri->segment(3);

		$barang = $this->M_Detailstuff->get_detail($id);
        $data = array(
            "title" => "Detail Stuff | Lost And Found"
        );
		$data['barang'] = $barang;
		$this->load->view('front/V_Detailstuff',$data);
	}
    function message($id_brg){
        date_default_timezone_set('Asia/Jakarta');
        $t      = date('Y/m/d H:i:s');
        $id     = $this->input->post('id_user');
        $idt    = $this->input->post('id_user_tujuan');
        $s      = $this->input->post('subject');
        $m      = $this->input->post('message');
        $this->M_Detailstuff->insertMessage($id,$idt,$s,$m,$t);
        $this->session->set_flashdata('result_pesan', '<br>Message has been sent.');
        redirect('C_Detailstuff/index/'.$id_brg);
    }
}
