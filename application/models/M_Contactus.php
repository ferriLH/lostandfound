<?php
/**
 * Created by PhpStorm.
 * User: Blacktrooper
 * Date: 1/9/2019
 * Time: 7:50 PM
 */

class M_Contactus extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function send($data)
    {
        $this->db->insert('t_pesan',$data);
    }
}