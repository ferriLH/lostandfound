<?php
class M_Signup extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function daftar($data)
    {
    	$this->db->insert('t_user',$data);
    }
}
?>