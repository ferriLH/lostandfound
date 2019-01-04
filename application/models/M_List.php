<?php
class M_List extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_barang()
    {
        $this->db->select('t_label.nama_label,t_kota.nama_kota,t_user.nama,t_barang.foto_barang,t_barang.nama_barang');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        return $this->db->get()->result();
    }

 }
// ?>