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

    function insertMessage($n,$e,$s,$m,$t){
        $data = array(
            'id_pesan'  =>'',
            'nama'      =>$n,
            'email'     =>$e,
            'subjek'    =>$s,
            'pesan'     =>$m,
            'status'    =>0,
            'hapus'     =>0,
            'waktu'     =>$t);
        $this->db->insert('t_pesan',$data);
    }
}