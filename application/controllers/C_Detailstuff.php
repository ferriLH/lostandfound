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
}
?>