<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/03/2019
 * Time: 11:01 PM
 */
class M_Home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_label()
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->limit(5);
        $this->db->order_by('nama_label','desc');
        return $this->db->get()->result();
    }
    function get_kota()
    {
        $this->db->select('*');
        $this->db->from('t_kota');
        $this->db->limit(5);
        $this->db->order_by('nama_kota','desc');
        return $this->db->get()->result();
    }
    function get_univ()
    {
        $this->db->select('*');
        $this->db->from('t_univ');
        $this->db->limit(5);
        $this->db->order_by('nama_univ','desc');
        return $this->db->get()->result();
    }
    function get_nama_barang()
    {
        $this->db->select('*');
        $this->db->from('t_barang');
        $this->db->order_by('nama_barang','desc');
        return $this->db->get()->result();
    }
    function get_most_label()
    {
        return $this->db->query("SELECT l.nama_label,l.id_label, count(b.id_label) as jumlah FROM t_barang b INNER JOIN t_label l ON b.id_label=l.id_label GROUP BY b.id_label ORDER BY jumlah DESC LIMIT 5")->result();
    }
    function get_most_barang()
    {
        $this->db->select('*');
        $this->db->from('t_barang');
        $this->db->join('t_univ','t_barang.id_univ=t_univ.id_univ');
        $this->db->order_by('tanggal_upload','desc');
        $this->db->limit(6);
        return $this->db->get()->result();
    }
}
