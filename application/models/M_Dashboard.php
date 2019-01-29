<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/04/2019
 * Time: 3:06 PM
 */
class M_Dashboard extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_new_inbox($id){
        $query = $this->db->query('SELECT * FROM t_message WHERE (status = 0 AND hapus = 0) AND (id_user = '.$id.' OR id_user_tujuan = '.$id.') ORDER BY waktu DESC');
        return $query->result();
    }
}
