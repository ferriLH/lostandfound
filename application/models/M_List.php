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
    function get_by_label($ik)
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->where('t_label.id_label=',$ik);
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
    function get_advanced_search($label,$kota,$univ)
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->join('t_univ','t_barang.id_univ=t_univ.id_univ');
        $this->db->where('t_kota.nama_kota',$kota);
        $this->db->where('t_univ.nama_univ',$univ);
        $this->db->like('t_barang.nama_barang',$label);
        $this->db->where('t_barang.status_barang',TRUE);

        return $this->db->get()->result();
    }

 }
// ?>