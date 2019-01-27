<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/04/2019
 * Time: 3:01 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Dashboard');
        $this->load->model('M_Stuff');
    }
    public function index($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Dashboard | Lost and Found",
                "barang" => $this->M_Stuff->get_data_brg($id)
            );
            $this->load->view('back/V_Dashboard',$data);
        }else{
            redirect('login');
        }
    }

}