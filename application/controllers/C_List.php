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
            "barang" => $this->M_List->get_barang()
        );
        $this->load->view('front/V_List',$data);
    }
    function byCity()
    {
        $data = array(
            "title" => "Explore By City | Lost and Found"
        );
        $ik = $this->uri->segment(3);
        $city = $this->M_List->get_byCity($ik);
        $data['barang'] = $city;
        $this->load->view('front/V_List',$data);
    }
    function search()
    {
        $data = array(
        "title" => "Search | Lost and Found"
    );
        $s = $this->input->get('keyword');
        $search = $this->M_List->get_search($s);
        $data['barang'] = $search;
        $this->load->view('front/V_List',$data);
    }
    function advancedsearch()
    {
        $label = $this->input->get('label');
        $kota  = $this->input->get('nama_kota');
        $univ  = $this->input->get('univ');
        $search = $this->M_List->get_search($label,$kota,$univ);
        $data['barang'] = $search;
        $this->load->view('front/V_List',$data);
    }
}
