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
    function cek_nik($nik){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("nik",$nik);
        return $this->db->get();
    }
    function cek_email($email){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("email",$email);
        return $this->db->get();
    }
    function activate($nik){
        $data = array(
            'status' =>true);
        $this->db->where('nik',$nik);
        $this->db->update('t_user',$data);
    }
}
