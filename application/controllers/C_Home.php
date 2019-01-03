<?php
/**
 * Created by.
 * User: HP
 * Date: 01/03/2019
 * Time: 10:58 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Home');
    }
    public function index()
    {
        $data['label'] = $this->M_Home->get_label();
        $data['kota'] = $this->M_Home->get_kota();
        $data['univ'] = $this->M_Home->get_univ();



        $this->load->view('front/V_Home',$data);
    }
}