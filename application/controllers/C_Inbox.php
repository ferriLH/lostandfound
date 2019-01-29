<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/27/2019
 * Time: 8:25 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Inbox extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Inbox');
        $this->load->model('M_Dashboard');
    }
    public function index($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Inbox | Lost and Found",
                "notif_new_inbox"=>$this->M_Dashboard->get_new_inbox($id),
                "inbox"=>$this->M_Inbox->get_inbox($id),
            );
            $this->load->view('back/V_Inbox',$data);

        }else{
            redirect('dashboard');
        }
    }
}