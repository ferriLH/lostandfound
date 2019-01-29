<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/27/2019
 * Time: 8:26 PM
 */

class M_Inbox extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_inbox($id){
        $this->db->select('t_message.*,t_user.id_user,t_user.nama,t_user.email,t_user.alamat,t_user.file_foto');
        $this->db->join('t_user','t_user.id_user = t_message.id_user','inner');
        $this->db->where('hapus',0);
        $this->db->where('t_message.id_user',$id,false);
        $this->db->or_where('t_message.id_user_tujuan',$id,false);
        $this->db->order_by('waktu','desc');
        $query = $this->db->get('t_message');
        return $query->result();
    }
}