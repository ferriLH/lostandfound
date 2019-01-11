<?php
class M_List extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_barang()
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->where('status_barang',TRUE);
        return $this->db->get()->result();
    }
    function get_byCity($ik)
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->where('t_kota.id_kota=',$ik);
        $this->db->where('status_barang',TRUE);
        return $this->db->get()->result();
    }
    function get_search($s)
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->like('t_barang.nama_barang',$s);
        $this->db->where('status_barang',TRUE);
        return $this->db->get()->result();
    }
    function get_advanced_search($s,$label,$kota,$univ)
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->like('t_barang.nama_barang',$s);
        return $this->db->get()->result();
    }

 }
// ?>