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
    }
    public function index()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->load->view('back/V_Dashboard');
        }else{
            redirect('login');
        }
    }

}