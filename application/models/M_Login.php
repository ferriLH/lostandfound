<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/24/2018
 * Time: 2:31 AM
 */
class M_Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function cek ($user,$pass){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("(nik = '$user' OR email = '$user')",NULL,FALSE);
        $this->db->where("password",$pass);
        $this->db->where("status",TRUE);
        return $this->db->get();
    }
    function cek_mail ($email){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("email",$email);
        return $this->db->get();
    }
    function change_pass($pass,$id){
        $data = array(
            'password' =>$pass);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
}

