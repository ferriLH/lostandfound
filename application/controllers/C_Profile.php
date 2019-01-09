<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/09/2019
 * Time: 3:47 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Profile extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Profile');
    }
    public function index()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Profile | Lost and Found"
            );
            $this->load->view('back/V_Profile',$data);

        }else{
            redirect('dashboard');
        }
    }
}
