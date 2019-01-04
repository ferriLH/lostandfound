<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_List extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_List');
        
    }
    public function index()
    {
        $data = array(
            "title" => "Explore | Lost and Found",
            "barang" => $this->M_List->get_barang(),
        );
        $this->load->view('front/V_List',$data);
    }
}
?>