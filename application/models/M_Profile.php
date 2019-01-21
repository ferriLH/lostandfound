<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/09/2019
 * Time: 3:49 PM
 */
class M_Profile extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function delete($id){
        $data = array(
            'status' => FALSE);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_nik($id,$nik){
        $data = array(
            'nik' => $nik);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_nama($id,$nama){
        $data = array(
            'nama' => $nama);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_email($id,$email){
        $data = array(
            'email' => $email);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_address($id,$alamat){
        $data = array(
            'alamat' => $alamat);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_password($id,$pass){
        $data = array(
            'password' => $pass);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function update_photo($id,$photo){
        $data = array(
            'file_foto' => $photo);
        $this->db->where('id_user',$id);
        $this->db->update('t_user',$data);
    }
    function get_account($id){
        $this->db->select("*");
        $this->db->from("t_user");
        $this->db->where('id_user',$id);
        return $this->db->get();
    }
    function cek ($pass){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("password",$pass);
        $this->db->where("status",TRUE);
        return $this->db->get();
    }
}

